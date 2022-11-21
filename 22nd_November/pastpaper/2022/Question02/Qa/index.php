<?php

//store students mark in associate array
$studentDetails = array("Uthpala" => "80", "Meena" => "92", "Abdhul" => "85", "Sahan" => "50", "Teena" => "65");//associative array

foreach ($studentDetails as $name => $mark) {//loop through the array

    if ($mark >= 90) {// if mark is greater than 90
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is A";//print the message
    } elseif ($mark >= 80) {// if mark is greater than 80
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is B";
    } elseif ($mark >= 70) {// if mark is greater than 70
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is C";
    } elseif ($mark >= 60) {// if mark is greater than 60
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is D";
    } else {
        echo "Try harder " . $name . ", You got " . $mark . " marks and you Fail the module";
    }

    echo "<br><br>";

//        echo "Congratulation " . $name . "You got " . $mark . " marks and your grade is A";
//        echo "Try harder " . $name . ",You got " . $mark . " marks and you Fail the module";
}

