<?php

$amount = 200;
$vat = 0.15 * $amount;

echo "Amount: $amount <br>";
echo "VAT (15%): $vat <br>";
echo "VAT over an ammount: " . ($amount + $vat) . "<br>";

?>
