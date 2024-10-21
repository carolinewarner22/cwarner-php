<?php

include 'person.php';
include 'student.php';

$person = new Student('Caroline', 'Warner', '0000000');
$person2 = new Student('Katherine', 'Warner', '9999999');
//$person->setFirst('Bob');//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $person->getFirst(); ?></h1>
    <h1><?= $person->getFullName(); ?></h1>
    <!--<h1<?//= $person->getID(); ?></h1>!-->

    <br/>

    <h1><?= $person2->getFirst(); ?></h1>
    <h1><?= $person2->getFullName(); ?></h1>
    <h1><?//= $person2->getID(); ?></h1>
</body>
</html>