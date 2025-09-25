<?php
// Define variables
$number1 = 10;
$number2 = 5;
$text = "The result of adding $number1 and $number2 is: ";

// Perform arithmetic operations
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;

// Output the results using string concatenation
echo $text . $sum . "<br>";  // Concatenate and display sum
echo "The difference is: " . $difference . "<br>";  // Concatenate and display difference
echo "The product is: " . $product . "<br>";  // Concatenate and display product
echo "The quotient is: " . $quotient . "<br>";  // Concatenate and display quotient
?>