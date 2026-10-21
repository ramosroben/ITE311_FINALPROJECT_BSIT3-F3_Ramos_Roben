<?php
// Platform transaction fee computation (starter code)
const FEE_RATE = 0.05; // 5% per transaction
function computeFee(float $amount): float {
    return round($amount * FEE_RATE, 2);
}
