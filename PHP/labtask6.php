<?php

$numbers = [10, 20, 30, 40, 50];
$search = 30;

echo "Searching Number: $search from the array.<br>";

foreach ($numbers as $n) {
    if ($n == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search found in the array.<br>";
} else {
    echo "Element $search not found in the array.<br>";
}

?>
