<?php

$score = 5;
$at = 70;

if($score >= 80){
    if($at >= 85){
        echo "Passed with honors";
    }
    else{
        echo "Passed but needs to improve attendance";
    }

}
else{
    echo "Failed";
}


?>