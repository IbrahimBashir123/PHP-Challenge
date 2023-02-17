<?php
$course_name = "PHP";
$enrolled_students = 36;
$price = 12.33;
$on_discount = true;

echo "Course title: " . $course_name . "\n";
echo "Enrolled Students: ", $enrolled_students, "\n";
echo "Course price: " . $price . " $ USD\n";
echo "Course on discount: " , ($on_discount ? "Yes" : "No") , "\n";
