<?php

// Switch Statement
 $payment_status = 'PAID';

 switch ($payment_status) {
     case 'PAID':
         echo 'Payment Status: ' . $payment_status . '<br>';
         break;
     case 'UNPAID':
         echo 'Payment Status: ' . $payment_status . '<br>';
         break;
    case 'PENDING':
        echo 'Payment Status: ' . $payment_status . '<br>';
        break;
     default:
         echo 'Payment Status: ' . $payment_status . '<br>';
         break;
 }