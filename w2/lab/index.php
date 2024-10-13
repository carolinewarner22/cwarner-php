<?php
    include 'functions.php';

    $firstName = '';
    $lastName = '';

    $maritalStatus = '';

    $birthday = '';
    $age = '';

    $heightFeet = '';
    $heightInches = '';

    $weight = '';

    $error = '';

    if(filter_input(INPUT_POST, 'first_name') != ''){
        $firstName = filter_input(INPUT_POST, 'first_name');
    }
    else{
        $error .= 'First name must be filled in <br/>';
    }

    if(filter_input(INPUT_POST, 'last_name') != ''){
        $lastName = filter_input(INPUT_POST, 'last_name');
    }
    else{
        $error .= 'Last name must be filled in <br/>';
    }

    if(filter_input(INPUT_POST, 'marital_status') != ''){
        $maritalStatus = filter_input(INPUT_POST, 'marital_status');
    }
    else{
        $error .= 'Marital status must be selected <br/>';
    }

    if (filter_input(INPUT_POST, 'birthday') && 
    (new DateTime(filter_input(INPUT_POST, 'birthday')) > new DateTime('1900-01-01')) && 
    (new DateTime(filter_input(INPUT_POST, 'birthday')) < new DateTime('tomorrow'))) {

        $birthday = filter_input(INPUT_POST, 'birthday');
    } 
    else {
        
        $error .= 'Date of birth must be valid <br/>';
    }

    if(filter_input(INPUT_POST, 'height_feet') > 0 AND filter_input(INPUT_POST, 'height_feet') <= 10 ){
        $heightFeet = filter_input(INPUT_POST, 'height_feet');
    }
    else{
        $error .= 'Height must be valid <br/>';
    }

    if(filter_input(INPUT_POST, 'height_inches') > 0 AND filter_input(INPUT_POST, 'height_inches') <= 11 ){
        $heightInches = filter_input(INPUT_POST, 'height_inches');
    }
    else{
        $error .= 'Height must be valid <br/>';
    }

    if(filter_input(INPUT_POST, 'weight') >= 0.1 AND filter_input(INPUT_POST, 'weight') <= 1000 ){
        $weight = filter_input(INPUT_POST, 'weight');
    }
    else{
        $error .= 'Weight must be valid <br/>';
    }

    if ($error == ''){
        $meters = metersCalc($heightFeet, $heightInches);

        $weightKg = kgCalc($weight);

        if ($meters > 0 AND $weightKg > 0){
            $bmi = bmiCalc($meters, $weightKg);
    
            $bmiClass = bmiClass($bmi);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Intake</title>
</head>
<>
    <h1>Patient Intake</h1>
    <div class="form-wrapper">
        <form name="patient-intake-form" method="post">
            <div class="form-control">
                <label for="first_name">First Name: </label><br/>
                <input type="text" id="first_name" name="first_name" value="<?= $firstName; ?>">
            </div>

            <div class="form-control">
                <label for="last_name">Last Name: </label><br/>
                <input type="text" id="last_name" name="last_name" value="<?= $lastName; ?>">
            </div>

            <div class="form-control">
                <p>Marital Status: </p>
                <label for="marital_status">Married </label>
                <input type="radio" id="married" name="marital_status" value="Married" <?= ($maritalStatus == 'Married') ? 'checked' : ''; ?>>
                <label for="marital_status">Not Married </label>
                <input type="radio" id="not_married" name="marital_status" value="Not Married" <?= ($maritalStatus == 'Not Married') ? 'checked' : ''; ?>>
            </div><br/>

            <div class="form-control">
                <label for="birthday">Date of Birth: </label><br/>
                <input type="date" id="birthday" name="birthday" min="" value="<?= htmlspecialchars($birthday); ?>">
            </div>

            <div class="form-control">
                <p>Height: </p>
                <input type="number" id="height_feet" name="height_feet" min="0" max="10" step="1" value="<?= $heightFeet; ?>">
                <label for="height_feet">ft.</label>

                <input type="number" id="height_inches" name="height_inches" min="0" max="11" step="1" value="<?= $heightInches; ?>">
                <label for="height_inches">in.</label>
                <br/>
                <br/>
            </div>

            <div class="form-control">
                <label for="weight">Weight: </label><br/>
                <input type="number" id="weight" name="weight" min="0.1" max="1000" step="0.1" value="<?= $weight; ?>">
                <br />
                <br />
            </div>
            
            <div class="form-control">
            <input type="submit" id="submit" name="submit" value="Submit">
            </div>

        </form>

    </div>


    <p style="color: red;"><?= $error; ?></p>

    <?php if($error == '' AND $_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>first name: </p><?= $firstName; ?>
        <p>last name: </p><?= $lastName; ?>
        <p>marital status: </p><?= $maritalStatus; ?>
        <p>date of birth: </p><?= $birthday; ?>
        <p>age: </p><?= age($birthday); ?>
        <p>height: </p><?= $heightFeet . "'" . " " . $heightInches . '"'; ?>
        <p>weight: </p><?= $weight . " lbs"; ?>
        <p>bmi: </p><?= round($bmi, 2) . " - " . $bmiClass; ?>
    <?php endif; ?>

</body>
</html>