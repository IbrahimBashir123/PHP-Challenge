<?php
$num = 'a4321';
$sum = 0;

for ($i = 0; $i < strlen($num); $i++) {
    $sum += intval($num[$i]);
}

echo "The sum of the digits of $num is: $sum";
?>