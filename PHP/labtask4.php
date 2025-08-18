<?php

$a = 12;
$b = 45;
$c = 33;

echo "Number's: $a, $b, $c<br>";

if ($a >= $b && $a >= $c) {
    echo "The largest number is: $a<br>";
}

elseif ($b >= $a && $b >= $c) {
    echo "The largest number is: $b<br>";
}

else {
    echo "The largest number is: $c<br>";
}

?>
