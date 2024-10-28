<?php

    include ( __DIR__ . '/db.php');

    function getPatients(){
        global $db;

        $results=[];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY patientLastName");

        if ($stmt->execute()&& $stmt->rowCount() > 0 ){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return ($results);
    }

    function addPatient ($fName, $lName, $married, $bDay) {
        global $db;
        $results = [];

        $sql = "INSERT INTO patients set patientFirstName = :fN, patientLastName = :lN, patientMarried = :m, patientBirthDate = :bD";
        $stmt = $db->prepare($sql);
        $binds = array(
            ":fN" => $fName,
            ":lN" => $lName,
            ":m" => (int)$married,
            ":bD" => $bDay,
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0){
            $results = "Data Added";
        }

        return ($results);
    }

