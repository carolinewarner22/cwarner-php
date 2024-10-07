<?php
    include 'functions.php';

    var_dump($_POST);

    $firstName = '';
    $lastName = '';
    $maritalStatus = '';
    $birthday = '';
    $heightFeet = '';
    $heightInches = '';
    $weight = '';

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

    //marital stat here//

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Intake</title>
</head>
<body>
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
                <input type="radio" id="married" name="marital_status" value="<?= $maritalStatus; ?>">
                <label for="marital_status">Not Married </label>
                <input type="radio" id="not_married" name="marital_status" value="<?= $maritalStatus; ?>"></div><br/>
            </div>

            <div class="form-control">
                <label for="birthday">Date of Birth: </label><br/>
                <input type="date" id="birthday" name="birthday" value="<?= $birthday; ?>">
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
                <input type="number" id="weight" name="weight" min="0.1" step="0.1" value="<?= $weight; ?>">
            </div>

        </form>

    </div>

</body>
</html>