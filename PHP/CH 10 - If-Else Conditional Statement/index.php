<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $score = 65;
    if($score >= 90) : ?>
        <strong>A</strong>
    <?php elseif($score >= 80) : ?>
        <strong>B</strong>
    <?php elseif($score >= 70) : ?>
        <strong>C</strong>
    <?php elseif($score >= 60) : ?>
        <strong>D</strong>
    <?php else : ?>
        <strong>F</strong>
    <?php endif ?>

</body>
</html>


<?php

$score = 95;

if($score >= 90) {
    echo 'A';
    if($score >= 95) {
        echo '+';
    }
} elseif($score >= 80) {
    echo 'B';
    if($score >= 85) {
        echo '+';
    }
} elseif($score >= 70) {
    echo 'C';
    if($score >= 75) {
        echo '+';
    }
} elseif($score >= 60) {
    echo 'D';
    if($score >= 65) {
        echo '+';
    }
} else {
    echo 'F';
}
?>