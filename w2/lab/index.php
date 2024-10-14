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
        $error .= 'First name must be filled in. <br/>';
    }

    if(filter_input(INPUT_POST, 'last_name') != ''){
        $lastName = filter_input(INPUT_POST, 'last_name');
    }
    else{
        $error .= 'Last name must be filled in. <br/>';
    }

    if(filter_input(INPUT_POST, 'marital_status') != ''){
        $maritalStatus = filter_input(INPUT_POST, 'marital_status');
    }
    else{
        $error .= 'Marital status must be selected. <br/>';
    }

    if (filter_input(INPUT_POST, 'birthday') && 
    (new DateTime(filter_input(INPUT_POST, 'birthday')) > new DateTime('1900-01-01')) && 
    (new DateTime(filter_input(INPUT_POST, 'birthday')) < new DateTime('tomorrow'))) {

        $birthday = filter_input(INPUT_POST, 'birthday');
    } 
    else {
        
        $error .= 'Date of birth must be valid. <br/>';
    }

    if(filter_input(INPUT_POST, 'height_feet') > 0 AND filter_input(INPUT_POST, 'height_feet') <= 10 ){
        $heightFeet = filter_input(INPUT_POST, 'height_feet');
    }
    else{
        $error .= 'Height in feet must be between 0 and 10 ft. <br/>';
    }

    if(filter_input(INPUT_POST, 'height_inches') > 0 AND filter_input(INPUT_POST, 'height_inches') <= 11 ){
        $heightInches = filter_input(INPUT_POST, 'height_inches');
    }
    else{
        $error .= 'Height in inches must be between 0 and 11 in. <br/>';
    }

    if(filter_input(INPUT_POST, 'weight') >= 0.1 AND filter_input(INPUT_POST, 'weight') <= 1000 ){
        $weight = filter_input(INPUT_POST, 'weight');
    }
    else{
        $error .= 'Weight must be between 0.1 and 1000 lbs. <br/>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            margin-left: 20px;
        }
    </style>
</head>
    <h1>Patient Intake</h1>
    <div class="form-wrapper">
        <form name="patient-intake-form" method="post">

            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="first_name">First Name: </label><br/>
                        <input type="text" id="first_name" name="first_name" value="<?= $firstName; ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="last_name">Last Name: </label><br/>
                        <input type="text" id="last_name" name="last_name" value="<?= $lastName; ?>">
                    </div>
                </div>
            </div>


            <div class="form-control form-check">
                <p>Marital Status: </p>

                <label for="marital_status" class="form-check-label">Married </label>

                <input type="radio" class="form-check-input" id="married" name="marital_status" value="Married" <?= ($maritalStatus == 'Married') ? 'checked' : ''; ?>>
                <br />
                <label for="marital_status" class="form-check-label">Not Married </label>
            
                <input type="radio" class="form-check-input" id="not_married" name="marital_status" value="Not Married" <?= ($maritalStatus == 'Not Married') ? 'checked' : ''; ?>>

                <br />
                <br />
            </div>

            <div class="form-control">
                <label for="birthday">Date of Birth: </label><br/>
                <input type="date" id="birthday" name="birthday" min="" value="<?= htmlspecialchars($birthday); ?>"><br /><br />
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <p>Height: </p>
                        <input type="number" id="height_feet" name="height_feet" min="0" max="10" step="1" value="<?= $heightFeet; ?>">
                        <label for="height_feet">ft.</label>

                        <input type="number" id="height_inches" name="height_inches" min="0" max="11" step="1" value="<?= $heightInches; ?>">
                        <label for="height_inches">in.</label>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <p>Weight:</p>
                        <input type="number" id="weight" name="weight" min="0.1" max="1000" step="0.1" value="<?= $weight; ?>">
                        <label for="weight">lbs</label><br/>
                        <br />
                    </div>
                </div>
            </div>


            
            <div class="form-control">
            <input type="submit" id="submit" name="submit" value="Submit">
            </div>

        </form>

    </div>


    <p style="color: red;"><?= $error; ?></p>

    <?php if($error == '' AND $_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="container-text-center">
            <h2>Patient Information</h2>
            <div class="row">
                <div class="col">
                    <p>First Name: <?= $firstName; ?></p>
                </div>
                <div class="col">
                    <p>Last Name: <?= $lastName; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Marital Status: <?= $maritalStatus; ?></p>
                </div>
                <div class="col">
                    <p>Date of Birth: <?= $birthday; ?></p>
                </div>
                <div class="col">
                    <p>Age: <?= age($birthday); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Height: <?= $heightFeet . "'" . " " . $heightInches . '"'; ?></p>
                </div>
                <div class="col">
                    <p>Weight: <?= $weight . " lbs"; ?></p>
                </div>
                <div class="col">
                    <p>BMI Class: <?= round($bmi, 2) . " - " . $bmiClass; ?></p>
                </div>
            </div>
        </div>
        
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>