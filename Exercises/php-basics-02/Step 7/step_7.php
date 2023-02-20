<?php
$input_string = "I love Python. Python is awesome.";

// Replace "Python" with "PHP"
$output_string = str_replace("Python", "PHP", $input_string);

// Replace "PHP" with " PHP"
$output_string = str_replace("PHP", " PHP", $output_string);

// Output the modified string
echo $output_string;