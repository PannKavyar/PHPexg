<?php
//number in pounds we want to convert to kilograms
$pound=140;
//floating points value for the pound to kilograms conversion use
$lb_to_kg=0.453592;
//the variables above to calculate  pounds multiplied by the kilogram conversion
$kilograms=$pound * $lb_to_kg;
//display the pounds to kilograms
echo "<p>Weight: ";
echo $pound;
echo " lp= ";
echo $kilograms;
echo " kg</p>";
//number in miles we want to convert to kilometers
$miles=2.5;
//floating point value for the mile to kilometer conversion
$miles_to_km=1.60934;
//use the variable above to calculate miles multilpied by the kilometer conversion
$kilometers=$miles*$miles_to_km;
//display the miles to kilometers
echo "<p>Distance: ";
echo $miles;
echo "miles= ";
echo $kilometers;
echo " km</p>";

?>