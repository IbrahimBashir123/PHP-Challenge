<?php
$grocery1 = ["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];

$grocery2 = ["eggs" => ['balade', 'mazere3'], "milk" => ['Fresh', 'Taanayel'], "water-pack" => ['Tanoureen', 'Reem']];
echo "Hey Sir, Please I need 1 pack ", $grocery2["eggs"][0], " eggs and 3 ", $grocery2["water-pack"][1], " Water Pack.\n";
echo "Hey Sir, Please I need 1 pack of " . $grocery2["eggs"][0] . " " . $grocery1[0] . " and 3 " . $grocery2["water-pack"][1] . " " . $grocery1[3] . "\n";
?>