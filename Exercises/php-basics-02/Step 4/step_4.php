<?php
function isArmstrong($num) {
  // Convert the number to a string to get the number of digits
  $num_str = (string)$num;
  $num_digits = strlen($num_str);

  // Calculate the sum of the cubes of each digit
  $sum = 0;
  for ($i = 0; $i < $num_digits; $i++) {
    $digit = (int)$num_str[$i];
    $sum += $digit ** $num_digits;
  }

  // Check if the sum is equal to the original number
  if ($sum == $num) {
    return true;
  } else {
    return false;
  }
}

// Test the function with some examples
$num1 = 153;
$num2 = 370;
$num3 = 371;
$num4 = 407;

echo "$num1 is " . (isArmstrong($num1) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num2 is " . (isArmstrong($num2) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num3 is " . (isArmstrong($num3) ? "an Armstrong number" : "not an Armstrong number") . "\n";
echo "$num4 is " . (isArmstrong($num4) ? "an Armstrong number" : "not an Armstrong number") . "\n";
