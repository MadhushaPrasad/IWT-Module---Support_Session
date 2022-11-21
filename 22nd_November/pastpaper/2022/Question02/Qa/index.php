<?php

//store students mark in associate array
$studentDetails = array("Uthpala" => "80", "Meena" => "92", "Abdhul" => "85", "Sahan" => "50", "Teena" => "65");

foreach ($studentDetails as $name => $mark) {

    if ($mark >= 90) {
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is A";
    } elseif ($mark >= 80) {
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is B";
    } elseif ($mark >= 70) {
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is C";
    } elseif ($mark >= 60) {
        echo "Congratulation " . $name . " You got " . $mark . " marks and your grade is D";
    } else {
        echo "Try harder " . $name . ", You got " . $mark . " marks and you Fail the module";
    }

    echo "<br><br>";

//        echo "Congratulation " . $name . "You got " . $mark . " marks and your grade is A";
//        echo "Try harder " . $name . ",You got " . $mark . " marks and you Fail the module";
}

