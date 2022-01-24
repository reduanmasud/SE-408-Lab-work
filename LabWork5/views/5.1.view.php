
<?php

// Checking Leap year;

// First let create a varable to hold the year
$year = 2000;

//check if year is diisible by 400

if($year % 400 == 0){
    echo "<h3 class='text-success'> $year is Leap Year </h1>";
} else {
    if( ($year % 4 == 0) && ($year % 100 != 0) ){
        echo "<h3 class='text-success'> $year is Leap Year </h1>";
    } else {
        echo "<h3 class='text-danger'> $year is not Leap Year </h1>";
    }
}


