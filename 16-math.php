<?php
// PHP Math
// PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

// PHP `pi()` Function
// The `pi()` function returns the value of PI.

// PHP `min()` and `max()` Functions
// The `min()` and `max()` functions can be used to find the lowest or highest value in a list of arguments.

// PHP `abs()` Function
// The `abs()` function returns the absolute (positive) value of a number.

// PHP `sqrt()` Function
// The `sqrt()` function returns the square root of a number.

// PHP `round()` Function
// The `round()` function rounds a floating-point number to its nearest integer.

// Random Numbers
// The `rand()` function generates a random number.
// To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
// For example, if you want a random integer between 10 and 100 (inclusive), use `rand(10, 100)`.

echo (pi() . "\n");

echo (min(0, 150, 30, 20, -8, -200) . "\n");
echo (max(0, 150, 30, 20, -8, -200) . "\n");

echo (abs(-15.7) . "\n");

echo (sqrt(0) . "\n");
echo (sqrt(1) . "\n");
echo (sqrt(16) . "\n");
echo (sqrt(64) . "\n");

echo (round(7.55) . "\n");

echo (rand() . "\n");
echo (rand(10, 50));
?>