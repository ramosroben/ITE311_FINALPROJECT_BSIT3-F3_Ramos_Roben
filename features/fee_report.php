<?php
// Transaction fee report (starter code)
require_once 'transaction_fee.php';
$sales = [450, 3500, 250];
foreach ($sales as $s) {
    echo "Sale: PHP $s | Platform fee: PHP " . computeFee($s) . "<br>";
}
