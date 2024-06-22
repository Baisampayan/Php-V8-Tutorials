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
    case 'REJECTED':
        echo 'Payment Status: ' . $payment_status . '<br>';
        break;
        default:
            echo 'Payment Status: UNKNOWN' . '<br>';
            break;
    }

// Switch Statement with Array and Loop

$payment_status = ['PAID', 'UNPAID', 'REJECTED'];
    foreach ($payment_status as $status) {
        switch ($status) {
            case 'PAID':
                echo 'Payment Status: ' . $status . '<br>';
                break;
            case 'UNPAID':
                echo 'Payment Status: ' . $status . '<br>';
                break;
            case 'PENDING':
                echo 'Payment Status: ' . $status . '<br>';
                break;
            case 'REJECTED':
                echo 'Payment Status: ' . $status . '<br>';
                break;
            default:
                echo 'Payment Status: UNKNOWN' . '<br>';
                break;
        }
    }