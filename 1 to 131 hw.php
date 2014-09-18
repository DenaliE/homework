/* Okay, so echo TRUE returns 1, so echo FALSE must return 0, right? NO! echo FALSE returns nothing. Why? Because boolean values are TRUE if the bit is set and FALSE if it is not set. Therefore, if nothing is set, then coverting nothing to a number or string results in nothing.*/

#Data Types

php > 6 % 2;

#php returns nothing

php > echo 6 % 2;
0

php > $x = 6 % 2;
php > echo $x;
0
php >

#Type Juggling
#1

var_dump((bool) 'Hello World' );
bool(true)

#2

var_dump((bool) 42 );
bool(true)

#3

var_dump((bool)'');
bool(false)

#4

var_dump((bool) -8 );
bool(true)

#5

var_dump((bool) 'true' );
bool(true)

#6

var_dump((bool) 1.618 );
bool(true)

#7

var_dump((bool) 'false' );
bool(true)

#8

var_dump((bool) 0 );
bool(false)

# Floats = floating point numbers = doubles = numbers with decimals
# data types in PHP are boolean, strings, integers, floats, arrays, objects, resource, and null

# Numbers in PHP
/* Cast the string "Hello" to an int and dump.
Cast the same string to a float. What is different?
Cast the float 3.14 to an int. What happened?
Cast the float 3.999 to an int. Was the result what you expected?
Cast the string "4.95" to an int. Then a float.
Cast the bool TRUE to int and float. Do the same for FALSE.*/

#1
Var_dump((int) "Hello" );
int(0)

#2
var_dump((float) 'Hello' );
double(0)

#3
var_dump((int) 3.14 );
int(3)

#4
var_dump((int) 3.999 );
int(3)

#5
var_dump((int) "4.95");
int(4)


var_dump((float) "4.95" );
double(4.95)

#6
var_dump((int) TRUE );
int(1)

var_dump((float) TRUE );
double(1)

var_dump((int) FALSE );
int(0)

var_dump((float) FALSE );
double(0)

# Intro to Strings

$name = 'John Doe';
$address= '123 Any St.';

php > echo $name. ', '.$address;
John Doe, 123 Any St.
php >

php > echo $name. '/ '. $address;
John Doe/ 123 Any St.
php >

php > echo $name. ' / '. $address;
John Doe / 123 Any St.
php >

echo "Joe Blow,\n123 Any St.\t12345";
Joe Blow,
123 Any St.	12345

$first_name = "Joe";
echo "That guy's nme is $first_name.";

echo "The value of \$first_name is $$first_name";

php > $first_name = 'Bob';
php > $last_name = 'Dole';
php > $address = '123 Any St.';

echo 
"{$first_name}, {$last_name}, {$address} ";
Bob, Dole, 123 Any St.
php >

php > echo "{$first_name}{$last_name}{$address}";
BobDole123 Any St.
php >

php > echo "{$first_name} {$last_name}\n{$address}";
Bob Dole
123 Any St.
php >

#Constants

define(MY_NAME, 'Denali');
echo MY_NAME;

PHP Notice:  Use of undefined constant MY_NAME - assumed 'MY_NAME' in php shell code on line 1
PHP Stack trace:
PHP   1. {main}() php shell code:0
PHP   2. {main}() php shell code:0

Notice: Use of undefined constant MY_NAME - assumed 'MY_NAME' in php shell code on line 1

# Needed a space between define and parantheses
define (MY_NAME, 'Denali');
echo MY_NAME;
Denali


# HW Question: What happens when you try to define a constant as something else, like below?
MY_NAME = 'Bob';

php > MY_NAME = 'Bob';
PHP Parse error:  syntax error, unexpected '=' in php shell code on line 1
PHP Stack trace:
PHP   1. {main}() php shell code:0

Parse error: syntax error, unexpected '=' in php shell code on line 1

# Use the Constant in a string. Does it output like a variable?

echo "MY_NAME";

MY_NAME

echo "{MY_NAME}";








