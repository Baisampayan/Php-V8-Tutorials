<?php

$paymentStatus = 3;

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Payment Status: PAID',
    2 => 'Payment Status: UNPAID',
    3 => 'Payment Status: PENDING',
    4 => 'Payment Status: REJECTED',
    default => 'Payment Status: UNKNOWN'
};

echo $paymentStatusDisplay; 

// Difference between Switch and Match
// Switch uses ==
// Match uses ===
