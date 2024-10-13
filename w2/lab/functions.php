<?php

    function metersCalc($heightFeet, $heightInches){

        $heightMeters = ((float)$heightInches + ((float)$heightFeet * 12)) * 0.0254;
        return $heightMeters;
    }

    function kgCalc($weight){
        $weightKg = (float)$weight / 2.20462;
        echo $weightKg;
        return $weightKg;
    }
    function bmiCalc($heightMeters, $weightKg){
        $bmi = $weightKg / ($heightMeters ** 2);
        return $bmi;
    }

    function age($birthday) {
        $birthDate = new DateTime($birthday);
        $today = new DateTime();
        $interval = $today -> diff($birthDate);
        return $interval->y;
    }
    
    function bmiClass($bmi) {
        if($bmi < 18.5){
            $classification = 'underweight';
        }
        else if($bmi > 18.5 AND $bmi < 24.9){
            $classification = 'normal weight';
        }
        else if($bmi > 25 AND $bmi < 29.9){
            $classification = 'overweight';
        }
        else {
            $classification = 'obese';
        }

        return $classification;
    }