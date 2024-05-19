<?php

$fname = 'Will';
$lname = 'Smith';
$fullName1 = "{$fname} Smith";
echo $fullName1 . '<br>';
$fullName2 = $fname . ' ' . $lname;
echo $fullName2 . '<br>';

# To get the first letter of the string
echo $fullName2[0] . '<br>';
# To get the last letter of the string
echo $fullName2[-1] . '<br>';

// Heredoc
$text = <<<TEXT
Hi,
Welcome To PHP Tutorials.
Have a great time.
TEXT;
echo $text;
echo '<br><br>';

# Same thing with line break
echo nl2br($text) . '<br><br>';

$name = 'Test';
$course = "JavaScript";
$text2 = <<<TEXT
Hi $name,
Welcome To $course Tutorials.
Have a great time.
TEXT;
echo $text2;
echo '<br><br>';

# Same thing with line break
echo nl2br($text) . '<br><br>';