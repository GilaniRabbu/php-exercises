# What is PHP?

- PHP is an acronym for "PHP: Hypertext Preprocessor".
- PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
- PHP is a widely-used, open source scripting language.
- PHP scripts are executed on the server.
- PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
- It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
- It is deep enough to run large social networks!
- It is also easy enough to be a beginner's first server side language!

## What is a PHP File?

- PHP files can contain text, HTML, CSS, JavaScript, and PHP code
- PHP code is executed on the server, and the result is returned to the browser as plain HTML
- PHP files have extension `.php`

## What Can PHP Do?

- PHP can generate dynamic page content
- PHP can create, open, read, write, delete, and close files on the server
- PHP can collect form data
- PHP can send and receive cookies
- PHP can add, delete, modify data in your database
- PHP can be used to control user-access
- PHP can encrypt data

**With PHP you are not limited to output HTML. You can output images or PDF files. You can also output any text, such as XHTML and XML.**

## Why PHP?

- PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
- PHP is compatible with almost all servers used today (Apache, IIS, etc.)
- PHP supports a wide range of databases
- PHP is free. Download it from the official PHP resource: www.php.net
- PHP is easy to learn and runs efficiently on the server side

## What's new in PHP 7

- PHP 7 is much faster than the previous popular stable release (PHP 5.6)
- PHP 7 has improved Error Handling
- PHP 7 supports stricter Type Declarations for function arguments
- PHP 7 supports new operators (like the spaceship operator: <=>)

##

## Basic PHP Syntax

- The default file extension for PHP files is "`.php`".
- A PHP file normally contains HTML tags, and some PHP scripting code.

```php
<?php
// PHP code goes here
?>
```

##

#### Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:

```php
<!DOCTYPE html>
<html lang="en">
<body>
  <h1>My First PHP Code</h1>

  <?php
    echo "Hello World";
  ?>
</body>
</html>
```

**Note: PHP statements end with a semicolon (`;`).**

##

## PHP Case Sensitivity

- In PHP, keywords (e.g. `if`, `else`, `while`, `echo`, etc.), classes, functions, and user-defined functions are not case-sensitive.
- In the example below, all three `echo` statements below are equal and legal:

```php
<!DOCTYPE html>
<html lang="en">
<body>

<?php
  echo "Hello, world!";
  Echo "Hello, world!";
  ECHO "Hello, world!";
?>

</body>
</html>
```

- Note: However; all `variable` names are case-sensitive!

##

## PHP Comments

- A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

```php
// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
```

##

## PHP Variables

- Variables are "containers" for storing information.
- In PHP, a variable starts with the `$` sign.

```php
<?php
$age = 25;
$name = "Hakim";
$total_volume = 3;

echo $age;
echo $name;
echo $total_volume;
?>
```

- Note: When you assign a text value to a variable, put quotes around the value.

### Rules for PHP variables:

- A variable starts with the `$` sign, followed by the name of the variable.
- A variable name must start with a letter or the underscore character.
- A variable name cannot start with a number.
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and \_ ).
- Variable names are case-sensitive (`$age` and `$AGE` are two different variables).

**Remember that PHP variable names are case-sensitive!**

### Output Variables

- The PHP `echo` statement is often used to output data to the screen.

### Assign Multiple Values

- You can assign the same value to multiple variables in one line:

```php
<?php
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;
?>
```

### Get the Type

- To get the data type of a variable, use the `var_dump()` function.

```php
<?php
$x = 5;
var_dump($x);

var_dump(5);
var_dump("Hakim");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>
```

##

## PHP Variables Scope

- In PHP, variables can be declared anywhere in the script.
- The scope of a variable is the part of the script where the variable can be referenced/used.
- PHP has three different variable scopes:
  - local
  - global
  - static

### Global and Local Scope

- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

```php
<?php
$a = 5; // global scope

function myTest() {
  // using a inside this function will generate an error
  echo "<p>Variable x inside function is: $a</p>";
}
myTest();

echo "<p>Variable x outside function is: $a</p>";
?>
```

- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

```php
<?php
function myTest() {
  $a = 5; // local scope
  echo "<p>Variable x inside function is: $a</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $a</p>";
?>
```

### PHP The global Keyword

- The `global` keyword is used to access a global variable from within a function.
- To do this, use the `global` keyword before the variables (inside the function):

```php
<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest(); // run function
echo $y; // output the new value for variable $y
?>
```

- PHP also stores all global variables in an array called `$GLOBALS[index]`.
- The `index` holds the name of the variable.
- This array is also accessible from within functions and can be used to update global variables directly.

```php
<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"];
}

myTest();
echo $y;
?>
```

### PHP The static Keyword

- Normally, when a function is completed/executed, all of its variables are deleted.
- However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
- To do this, use the `static` keyword when you first declare the variable:

```php
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>
```

- Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
- Note: The variable is still local to the function.

##

## PHP echo and print Statements

- `echo` and `print` are more or less the same. They are both used to output data to the screen.
- The differences are small: `echo` has no return value while `print` has a return value of 1 so it can be used in expressions.
- `echo` can take multiple parameters (although such usage is rare) while `print` can take one argument.
- `echo` is marginally faster than `print`.

### The PHP echo Statement

- The `echo` statement can be used with or without parentheses: `echo` or `echo()`.

**Display Text**

```php
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
```

**Display Variables**

```php
<?php
$txt1 = "Learn PHP";
$txt2 = "PHP.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
```

### The PHP print Statement

- The `print` statement can be used with or without parentheses: `print` or `print()`.

**Display Text**

```php
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>
```

**Display Variables**

```php
<?php
$txt1 = "Learn PHP";
$txt2 = "PHP.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
```

##

## PHP printf() Function

- The `printf()` function outputs a formatted string.

```php
<?php
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.", $number, $str);
?>
```

##

## PHP Data Types

- Variables can store data of different types, and different data types can do different things.
- PHP supports the following data types:
  - String
  - Integer
  - Float (floating point numbers - also called double)
  - Boolean
  - Array
  - Object
  - NULL
  - Resource

### Getting the Data Type

- You can get the data type of any object by using the `var_dump()` function.

```php
var_dump(5); # Integer
var_dump("String"); # String
var_dump(3.14); # Float
var_dump(true); # Boolean
var_dump([2, 3, 56]); # Array
var_dump(NULL);
```

#### PHP String

- A string is a sequence of characters, like "Hello world!".

#### PHP Integer

- An integer data type is a non-decimal number between -2, 147, 483, 648 and 2, 147, 483, 647.
- Rules for integers:
  - An integer must have at least one digit
  - An integer must not have a decimal point
  - An integer can be either positive or negative
  - Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

#### PHP Float

- A float (floating point number) is a number with a decimal point or a number in exponential form.

#### PHP Boolean

- A Boolean represents two possible states: TRUE or FALSE.
- Booleans are often used in conditional testing.

#### PHP Array

- An array stores multiple values in one single variable.

```php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
```

#### PHP Object

- Classes and objects are the two main aspects of object-oriented programming.
- A class is a template for objects, and an object is an instance of a class.
- When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
- Let's assume we have a class named `Car` that can have properties like model, color, etc. We can define variables like `$model`, `$color`, and so on, to hold the values of these properties.
- When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
- If you create a `__construct()` function, PHP will automatically call this function when you create an object from a class.

```php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
```

#### PHP NULL Value

- Null is a special data type which can have only one value: NULL.
- A variable of data type NULL is a variable that has no value assigned to it.
- Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

```php
$x = "Hello world!";
$x = null;
var_dump($x);
```

#### Change Data Type

- If you assign an integer value to a variable, the type will automatically be an integer.
- If you assign a string to the same variable, the type will change to a string:

```php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);
```

- If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
- Casting allows you to change data type on variables:

```php
$x = 5;
$x = (string) $x;
var_dump($x);
```

#### PHP Resource

- The special resource type is not an actual data type.
- It is the storing of a reference to functions and resources external to PHP.
- A common example of using the resource data type is a database call.

##

## PHP Strings

- A string is a sequence of characters, like "Hello world!".
- Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
- **Note** There is a big difference between double quotes and single quotes in PHP.
- Double quotes process special characters, single quotes does not.

### Example Double Quotes

- Double quoted string literals perform operations for special characters:

```php
<?php
$x = "John";
echo "Hello $x";
?>
# Output: Hello John
```

### Example Single Quotes

- Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

```php
<?php
$x = "John";
echo 'Hello $x';
?>
# Output: Hello $x
```

### String Length

- The PHP `strlen()` function returns the length of a string.

```php
echo strlen("Hello world!");
```

### Word Count

- The PHP `str_word_count()` function counts the number of words in a string.

```php
echo str_word_count("Hello world!");
```

### Search For Text Within a String

- The PHP `strpos()` function searches for a specific text within a string.
- If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

```php
echo strpos("Hello world!", "world");
```

- Tip: The first character position in a string is 0 (not 1).

### Modify Strings

- PHP has a set of built-in functions that you can use to modify strings.

```php
$x = "Hello World!";

# Upper Case
echo strtoupper($x);

# Lower Case
echo strtolower($x);

# Replace String
echo str_replace("World", "Max", $x);

# Reverse a String
echo strrev($x);

# Remove Whitespace
$a = " Hello World! ";
echo trim($a);
# Output: Hello World!
```

### Convert String into Array

- The PHP `explode()` function splits a string into an array.
- The first parameter of the `explode()` function represents the "separator". The "separator" specifies where to split the string.

```php
$x = "Hello World!";
$y = explode(" ", $x);

# Use the print_r() function to display the result:
print_r($y);
```

### Concatenate Strings

- To concatenate, or combine, two strings you can use the `.` operator

```php
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z; # HelloWorld

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z; # Hello World

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z; # Hello World
```

### Slicing Strings

- You can return a range of characters by using the `substr()` function.
- Specify the start index and the number of characters you want to return.
- Note The first character has index 0.
- Note The last character has index -1.

```php
$x = "Hello World!";
echo substr($x, 6, 5); # Output: World

echo substr($x, -5, 3); # orl
```

### Escape Character

- To insert characters that are illegal in a string, use an escape character.
- An escape character is a backslash \ followed by the character you want to insert.

```php
$newTxt = "We are the so-called \"Vikings\" from the north.";
echo $newTxt;

\' 	  Single Quote
\" 	  Double Quote
\$ 	  PHP variables
\n 	  New Line
\r 	  Carriage Return
\t 	  Tab
\f 	  Form Feed
\ooo 	Octal value
\xhh 	Hex value
```

##

## PHP Numbers

- There are three main numeric types in PHP:

  - Integer
  - Float
  - Number Strings

```php
$a = 5; # Integer
$b = 5.34; # Float
$c = "25"; # Number Strings
```

- In addition, PHP has two more data types used for numbers:
  - Infinity
  - NaN

### PHP Integers

- 2, 256, -256, 10358, -179567 are all integers.
- An integer is a number without any decimal part.
- An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

- Here are some rules for integers:

  - An integer must have at least one digit
  - An integer must NOT have a decimal point
  - An integer can be either positive or negative
  - Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)

- PHP has the following predefined constants for integers:

  - `PHP_INT_MAX` - The largest integer supported
  - `PHP_INT_MIN` - The smallest integer supported
  - `PHP_INT_SIZE` - The size of an integer in bytes

- PHP has the following functions to check if the type of a variable is integer:
  - `is_int()`
  - `is_integer()` - alias of `is_int()`
  - `is_long()` - alias of `is_int()`

```php
<?php
// Check if the type of a variable is integer
$x = 5985;
var_dump(is_int($x)); // bool(true)

echo "<br>";

// Check again...
$x = 59.85;
var_dump(is_int($x)); // bool(false)
?>
```

### PHP Floats

- A float is a number with a decimal point or a number in exponential form.
- 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

- PHP has the following predefined constants for floats (from PHP 7.2):

  - `PHP_FLOAT_MAX` - The largest representable floating point number
  - `PHP_FLOAT_MIN` - The smallest representable positive floating point number
  - `PHP_FLOAT_DIG` - The number of decimal digits that can be rounded into a float and back without precision loss
  - `PHP_FLOAT_EPSILON` - The smallest representable positive number x, so that x + 1.0 != 1.0

- PHP has the following functions to check if the type of a variable is float:
  - `is_float()`
  - `is_double()` - alias of `is_float()`

```php
<?php
// Check if the type of a variable is float
$x = 10.365;
var_dump(is_float($x)); // bool(true)
?>
```

### PHP Infinity

- A numeric value that is larger than `PHP_FLOAT_MAX` is considered infinite.

- PHP has the following functions to check if a numeric value is finite or infinite:

  - is_finite()
  - is_infinite()

- However, the PHP `var_dump()` function returns the data type and value

```php
<?php
// Check if a numeric value is finite or infinite
$x = 1.9e411;
var_dump($x); // float(INF)
?>
```

### PHP NaN

- NaN stands for Not a Number.
- NaN is used for impossible mathematical operations.
- PHP has the following functions to check if a value is not a number:
  - `is_nan()`

### PHP Numerical Strings

- The PHP `is_numeric()` function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

```php
<?php
// Check if the variable is numeric
$x = 5985;
var_dump(is_numeric($x)); // bool(true)

echo "<br>";

$x = "5985";
var_dump(is_numeric($x)); // bool(true)

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x)); // bool(true)

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)); // bool(false)
?>
```

### PHP Casting Strings and Floats to Integers

- Sometimes you need to cast a numerical value into another data type.
- The `(int)`, `(integer)`, and `intval()` functions are often used to convert a value to an integer.

```php
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast; // 23465

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast; // 23465
?>
```

##

## PHP Operators

- Operators are used to perform operations on variables and values.

- PHP divides the operators in the following groups:
  - Arithmetic operators
  - Assignment operators
  - Comparison operators
  - Increment / Decrement operators
  - Logical operators
  - String operators
  - Array operators
  - Conditional assignment operators

### PHP Arithmetic Operators

- The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
  - Addition: `$x + $y`
  - Subtraction: `$x - $y`
  - Multiplication: `$x * $y`
  - Division: `$x / $y`
  - Modulus: `$x % $y`
  - Exponentiation: `$x ** $y`

### PHP Assignment Operators

- The PHP assignment operators are used with numeric values to write a value to a variable.

- The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
  - Set Value: `x = 10`
  - Addition: `x += 100`
  - Subtraction: `x -= 100`
  - Multiplication: `x *= 100`
  - Division: `x /= 100`
  - Modulus: `x %= 100`

### PHP Increment / Decrement Operators

- The PHP increment operators are used to increment a variable's value.
- The PHP decrement operators are used to decrement a variable's value.

- Pre-increment: `++$number` Increments $number by one, then returns $number.
- Post-increment: `$number++` Returns $number, then increments $number by one.
- Pre-decrement: `--$number` Decrements $number by one, then returns $number.
- Post-decrement: `$number--` Returns $number, then decrements $number by one.

### Comparison Operators

- Equal: `==` - Returns true if the values are equal.
- Identical: `===` - Returns true if the values and data types are identical.
- Not equal: `!=` - Returns true if the values are not equal.
- Not equal: `<>` - Returns true if the values are not equal.
- Not identical: `!==` - Returns true if the values or data types are not identical.
- Greater than: `>` - Returns true if the first value is greater than the second value.
- Less than: `<` - Returns true if the first value is less than the second value.
- Greater than: `>=` - or equal to Returns true if the first value is greater than, or equal to, the second value.
- Less than: `<=` - or equal to Returns true if the first value is less than, or equal to, the second value.

### Logical Operators

- And: `and` - True if both conditions are true.
- And: `&&` - True if both conditions are true.
- Or: `or` - True if either condition is true.
- Or: `||` - True if either condition is true.
- Xor: `xor` - True if either condition is true, but not both.
- Not: `!` - True if condition is not true.

### PHP String Operators

- PHP has two operators that are specially designed for strings.

- Concatenation: `.` `$txt1 . $txt2` Concatenation of $txt1 and $txt2.
- Concatenation Assignment: `.=` `$txt1 .= $txt2` Appends $txt2 to $txt1.

```php
<?php
$txt1 = "Hello";
$txt2 = " World!";
echo $txt1 . $txt2; // Hello World!

$txt1 = "Hello";
$txt2 = " World!";
$txt1 .= $txt2;
echo $txt1; // Hello World!
?>
```

##

## PHP Conditional Statements

- In PHP we have the following conditional statements:
  - `if` statement - executes some code if one condition is true.
  - `if...else` statement - executes some code if a condition is true and another code if that condition is false.
  - `if...elseif...else` statement - executes different codes for more than two conditions.
  - `switch` statement - selects one of many blocks of code to be executed.

### Syntax

- The `if` statement executes some code if one condition is true.
- The `if...else` statement executes some code if a condition is true and another code if that condition is false.
- The `if...elseif...else` statement executes different codes for more than two conditions.

```php
<?php
// Comparison Operators
if (5 > 3) {
  echo "Have a good day!";
}


$age = 14;

if ($age < 16) {
  echo "You're not eligible for vote!";
} else {
  echo "You're eligible for vote!";
}


$num = 12;

if ($num % 2 == 0) {
  echo "$num is an even number";
} else {
  echo "$num is an odd number";
}


$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a > $c ) {
  echo "a is the highest number";
} elseif ($b > $a && $b > $c) {
  echo "b is the highest number";
} else {
  echo "c is the highest number";
}


$food = "tuna";

if ("tuna" == $food || "salmon" == $food) {
  echo "It has Vitamin D";
} else {
  echo "we don't know if {$food} contains vitamin D";
}


// 1. - Divisible by 4 ?
// 2. - Divisible by 100 ?
// 3. - Divisible by 400 ?

$year = 2010;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
  echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
  echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
  echo "{$year} is a leap year";
} else {
  echo "{$year} is not a leap year";
}

// Shorthand Complex Condition
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
  echo "{$year} is a leap year";
} else {
  echo "{$year} is not a leap year";
}


// Logical Operators
$x = 5;

if ($x == 2 || $x == 3 || $x == 4 || $x == 5 || $x == 6 || $x == 7) {
  echo "$x is a number between 2 and 7";
}


$age = 14;

if ($age >= 13 && $age <= 19) {
  echo "This person is a teenager";
} else {
  echo "This person is not a teenager";
}
?>
```

### Shorthand

```php
$num = 5;
if ($num < 10) echo "$num is a number between 2 and 10";

$number = 12;
$res = $number % 2 == 0 ? "Even Number" : "Odd Number";
echo $res;
// Note: This technique is known as Ternary Operators, or Conditional Expressions.
```

### Nested

```php
<?php
$a = 100
$b = 200
$c = 300

// Outer if statement
if ($a > $b) {

  // Inner if statement
  if ($a > $c) {
    // Print statement 1
    print("$a is Greater");
  }

  // Inner else statement
  else {
    // Print statement 2
    print("$c is Greater");
  }
}

// Outer else statement
else {

  // Inner if statement
  if ($b > $c) {
    // Print statement 3
    print("$b is Greater");
  }

  // Inner else statement
  else {
    // Print statement 4
    print("$c is Greater");
  }
}


$number = 5;

if ($number >= 0) {
  if ($number == 0) {
    print("Number is 0");
  } else {
    print("Number is greater than 0");
  }
} else {
  print("Number is smaller than 0");
}
?>
```

### Ternary Operator

- Another conditional operator is the `a ? b : c` (or ternary) operator.
- The ternary operator is a shorthand for the `if...else` statement.

```php
<?php
$num = 10;

if ($num == 11) {
  print("Number Eleven");
} elseif ($num == 10) {
  print("Number Ten");
} else {
  print("A Number");
}

echo "\n";

// $number = ($num == 10) ? "Number Ten" : "A Number";
$number = $num == 12 ? "Number Twelve" : ($num == 10 ? "Number Ten" : "A Number");
echo $number;

echo "\n";

// Find the Even Number
$even = ($num % 2 == 0) ? "Even Number" : "Odd Number";
echo $even;
?>
```

### PHP Switch Statement

- Use the `switch` statement to select one of many blocks of code to be executed.
- The expression is evaluated once.
- The value of the expression is compared with the values of each case.
- If there is a match, the associated block of code is executed.
- The `break` keyword breaks out of the switch block.
- The `default` code block is executed if there is no match.
  - This will stop the execution of more code, and no more cases are tested.
  - The last block does not need a break, the block breaks (ends) there anyway.

```php
<?php
$n = 16;
$r = $n % 2;

switch ($r) {
  case 0:
    echo "{$n} is an even number";
    break;
  default:
    echo "{$n} is an odd number";
}

echo "\n";

// Nested
switch ($r) {
  case 0:
    switch ($n) {
      case $n > 0:
        echo "$n is a positive even number";
        break;
      case $n < 0:
        echo "$n is a negative even number";
        break;
    }
    break;
  default:
    switch ($n) {
      case $n > 0:
        echo "$n is a positive odd number";
        break;
      case $n < 0:
        echo "$n is a negative odd number";
        break;
    }
}

echo "\n";

switch (true) {
  case(0 == $r && $n > 0):
    echo "$n is a positive even number";
    break;
  case(1 == $r && $n > 0):
    echo "$n is a positive odd number";
    break;
  case(0 == $r && $n < 0):
    echo "$n is a negative even number";
    break;
  case(-1 == $r && $n < 0):
    echo "$n is a negative odd number";
    break;
}

echo "\n";

$string = "8balls";
switch ($string) {
  case "9balls":
    echo "Nine Balls";
    break;
  case 8:
    echo "8";
    break;
  case "8balls":
    echo "Eight Balls";
    break;
}

echo "\n";

$color = "red";

switch ($color) {
  case "red":
    echo ucwords($color) . " is our favorite color";
    break;
  case "blue":
    echo ucwords($color) . " is our favorite color";
    break;
  case "green":
    echo ucwords($color) . " is our favorite color";
    break;
  default:
    echo "This color is ok";
}

echo "\n";

// If you want multiple cases to use the same code block, you can specify the cases like this:

$day = 3;

switch ($day) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
?>
```

### Alternative Syntax For Control Structures

- PHP offers an alternative syntax for some of its control structures.
- Namely, `if`, `while`, `for`, `foreach`, and `switch`.
- In each case, the basic form of the alternate syntax is to change the opening brace to a colon (:) and the closing brace to `endif;`, `endwhile;`, `endfor;`, `endforeach;`, or `endswitch;`, respectively.

```php
<?php
$Number = 6;

if ($Number == 5):
  echo "$Number equals 5";
  echo PHP_EOL; // End Of Line (EOL)
  echo "Some Text++";
elseif ($Number == 6):
  echo "$Number equals 6";
  echo PHP_EOL;
  echo "Some Text++";
else:
  echo "$Number is neither 5 nor 6";
  echo PHP_EOL;
  echo "Some Text++";
endif;

echo PHP_EOL;

switch ($Number):
  case 5:
    echo "$Number equals 5";
    break;
  case 6:
    echo "$Number equals 6";
    break;
  default:
    echo "$Number is neither 5 nor 6";
endswitch;
?>
```

##

## PHP Loops

- Loops are used to execute the same block of code again and again, as long as a certain condition is true.

- In PHP, we have the following loop types:
  - `while` - loops through a block of code as long as the specified condition is true.
  - `do...while` - loops through a block of code once, and then repeats the loop as long as the specified condition is true.
  - `for` - loops through a block of code a specified number of times.
  - `foreach` - loops through a block of code for each element in an array.

### PHP for Loop

- The `for` loop - Loops through a block of code a specified number of times.
- The `for` loop is used when you know how many times the script should run.

```php
// for loop
for ($i = 0; $i <= 10; $i++) {
  echo $i;
}


for ($i = 0; $i <= 100; $i+=10) {
  echo $i;
}


// Nested for loop
for ($i = 0; $i <= 10; $i++) {
  echo PHP_EOL;
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
}
```

#### The break Statement

- With the `break` statement we can stop the loop even if the condition is still true.

```php
for ($i = 0; $i <= 10; $i++) {
  if ($i == 3) break;
  echo $i;
}
```

#### The continue Statement

- With the `continue` statement we can stop the current iteration, and continue with the next.

```php
for ($i = 0; $i <= 10; $i++) {
  if ($i == 3) continue;
  echo $i;
}
```

### PHP while Loop

- The `while` loop executes a block of code as long as the specified condition is true.

```php
// While Loop
$i = 0;
while ($i < 10) {
  $i++;
  echo $i . PHP_EOL;
}


// The break Statement
$i = 1;
while ($i < 6) {
  if ($i == 4) break;
  echo $i;
  $i++;
}


// The continue Statement
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}


// Alternative Syntax
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
```

- **Note:** remember to increment `$i`, or else the loop will continue forever.
- The `while` loop does not run a specific number of times, but checks after each iteration if the condition is still true.
- The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

### PHP do while Loop

- The `do...while` loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.

```php
// Do While Loop
$i = 0;
do {
  $i++;
  echo $i . PHP_EOL;
} while ($i < 10);


// The break Statement
$i = 1;
do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);


// The continue Statement
$i = 0;
do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
```

- **Note:** In a `do...while` loop the condition is tested AFTER executing the statements within the loop. This means that the `do...while` loop will execute its statements at least once, even if the condition is false. See example below.

```php
// Do While Loop
$i = 7;
do {
  $i++;
  echo $i . PHP_EOL;
} while ($i < 6); // Output 8
```

- The code will be executed once, even if the condition is never true.

### PHP foreach Loop

- The `foreach` loop - Loops through a block of code for each element in an array or each property in an object.
- The most common use of the `foreach` loop, is to loop through the items of an array.

#### Keys and Values

- The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
- Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
- This can be done by specifying both the key and value in the `foreach` definition.

#### foreach Example

```php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
}


// Keys and Values
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}


// The foreach Loop on Objects
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}


// The break Statement
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}


// The continue Statement
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}


// Alternative Syntax
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
```

- For every loop iteration, the value of the current array element is assigned to the variable `$x`. The iteration continues until it reaches the last array element.

#### Foreach Byref

- By default, changing an array item will not affect the original array.

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
```

- BUT, by using the `&` character in the `foreach` declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array.

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
```

##

## PHP Functions

- PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

### PHP Built-in Functions

- PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

### PHP User Defined Functions

- Besides the built-in PHP functions, it is possible to create your own functions.

  - A function is a block of statements that can be used repeatedly in a program.
  - A function will not execute automatically when a page loads.
  - A function will be executed by a call to the function.

- A user-defined function declaration starts with the keyword `function`.
- A function name must start with a letter or an underscore.
- Function names are NOT case-sensitive.
- To call the function, just write its name followed by parentheses `()`.

```php
function myMessage()
{
  echo "Hello world!";
}
myMessage();

// The function Outputs - "Hello world!".
```

### PHP Function Arguments

- Information can be passed to functions through arguments. An argument is just like a variable.
- Arguments are specified after the function name, inside the parentheses.
- You can add as many arguments as you want, just separate them with a comma.

```php
function Name($fname, $lname, $year)
{
  echo $fname . " " . $lname . ". Born in " . $year;
}
Name("Murat", "Hakim", 1982);
Name("John", "Doe", 1992);
```

### PHP Default Argument Value

- If we call the function `setHeight()` without arguments it takes the default value as argument.

```php
function setHeight($minHeight = 65)
{
  echo "The height is : $minHeight";
}
setHeight(90);
setHeight(); // will use the default value of 65
setHeight(75);
setHeight(80);
```

### PHP Functions - Returning values

- To let a function return a value, use the `return` statement.

```php
function Sum($x, $y)
{
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . Sum(5, 10);
echo "7 + 13 = " . Sum(7, 13);
echo "2 + 14 = " . Sum(2, 14);
```

### Passing Arguments by Reference

- In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
- When a function argument is passed by reference, changes to the argument also change the variable that was passed in.
- To turn a function argument into a reference, the `&` operator is used.

```php
function add_five(&$value)
{
  $value += 5;
}
$num = 2;
add_five($num);
echo $num; // 7
```

### Variable Number of Arguments

- By using the `...` operator in front of the function parameter, the function accepts an unknown number of arguments.
- This is also called a variadic function.
- The variadic function argument becomes an array.

```php
function sumMyNumbers(...$x)
{
  $n = 0;
  $len = count($x);
  for ($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}
$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
```

- You can only have one argument with variable length, and it has to be the last argument.
- The variadic argument must be the last argument.

```php
function myFamily($lname, ...$fname)
{
  $txt = "";
  $len = count($fname);
  for ($i = 0; $i < $len; $i++) {
    $txt = $txt . "Hi, $fname[$i] $lname.<br>";
  }
  return $txt;
}
$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
```

- If the variadic argument is not the last argument, you will get an error.

### PHP is a Loosely Typed Language

- PHP automatically associates a data type to the variable, depending on its value.
- Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
- **In PHP 7**, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the `strict` declaration, it will throw a **"Fatal Error"** if the data type mismatches.
- In the following example we try to send both a number and a string to the function without using `strict`.

```php
function addNumbers(int $a, int $b)
{
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


function sum(int $x, int $y, int $z)
{
  return $x + $y + $z;
}
echo sum("3", 12, 5); // 20
// echo sum("c", 12, 5); // Fatal error


function sum(float $x, float $y): float
{
  return $x + $y;
}
echo sum(3.5, 5.2); // 8.7


function sum(int $x, int $y): int
{
  return $x + $y;
}
echo sum(3.5, 5.2); // 8
```

##
