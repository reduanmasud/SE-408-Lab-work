<?php

//creating a funciton for checking leapyear
function is_leap_year($year)
{
    if($year % 400 == 0){
        echo "<h3 class='text-success'> $year is Leap Year </h1>";
    } else {
        if( ($year % 4 == 0) && ($year % 100 != 0) ){
            echo "<h3 class='text-success'> $year is Leap Year </h1>";
        } else {
            echo "<h3 class='text-danger'> $year is not Leap Year </h1>";
        }
    }
}



is_leap_year(2020);
is_leap_year(2000);
is_leap_year(2200);