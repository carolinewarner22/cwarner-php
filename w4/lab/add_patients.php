<?php

ini_set('display_errors' ,1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include __DIR__ . '/models/model_patients.php';

function age ($bdate) {
    $date = new DateTime($bdate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
 }

$firstName = '';
$lastName = '';
$birthdate = '';
$married = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
        $married = isset($_POST['married']) && $_POST['married'] === 'true' ? 1 : 0;
        
        addPatient ($firstName, $lastName, $married, $birthdate);

        /*echo "<h2>Patient Added: </h2>";
        echo "<p>Name: ", $firstName , " " , $lastName, "</p>";
        echo "<p>Marital Status: ", $married ;
        echo "<p>Birthdate: ",$birthdate;*/

        header("Location: view_patients.php");
        exit; 
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Lab</title>
</head>
<body>
    <h1>Patient Intake</h1>
    <h3>Please enter your information</h3>


    <form method="post" name='checkForm'>
        <div>
            <label for="firstName">First Name: </label>
            <input type="text" name='firstName' value="<?php echo $firstName?>">
        </div>
        <div>
            <label for="lastName">Last Name: </label>
            <input type="text" name='lastName'value="<?php echo $lastName?>">
        </div>
        <div>
            <label for="married">Married: </label>
            <input type="radio" id="ismarried" name='married' value="true" <?= $married==true?"checked":"" ?>>
            <label for="ismarried">Yes</label>
            <input type="radio" id="nomarried" name='married' value="false"<?= $married==false?"checked":"" ?>>
            <label for="nomarried">No</label>
        </div>
        <div>
            <label for="birthdate">Birthdate: </label>
            <input type="date" name="birthdate" value="<?php echo $birthdate?>">
        </div>
        <div>
            <input type="submit" name='submitBtn'>
        </div>

    </form>
    <br><br>
    <a href="./view_patients.php">Return</a>
</body>
</html>