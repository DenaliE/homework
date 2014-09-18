#Intro to Arrays
#1

php > $numbers=array(1,2,3,4,5);

php > var_dump($numbers);

php > print_r($numbers);

#2 

$numbers = [1,2,3,4,5];

php > var_dump($numbers);

php > print_r($numbers);

#3

php > echo $numbers[3];

#4

php > $person1 = array('first_name' => 'Denali', 'last_name' => 'Endicott', 'email' => 'email@email.com', 'phone' => 867-5309);

#5

#Version 1

php > $person1 = array('first_name' => 'Denali', 'last_name' => 'Endicott', 'email' => 'email', 'phone' => 867-5309);
php > $person2 = array('first_name' => 'Bob', 'last_name' => 'Jones', 'email' => 'email2', 'phone' => 333-5555);
php > $person3 = array('first_name' => 'Bill', 'last_name' => 'Smith', 'email' =>'email3', 'phone' => 123-6543);
php > $test = array($person1, $person2, $person3);
php > var_dump($test);
array(3) {
  [0] =>
  array(4) {
    'first_name' =>
    string(6) "Denali"
    'last_name' =>
    string(8) "Endicott"
    'email' =>
    string(5) "email"
    'phone' =>
    int(-4442)
  }
  [1] =>
  array(4) {
    'first_name' =>
    string(3) "Bob"
    'last_name' =>
    string(5) "Jones"
    'email' =>
    string(6) "email2"
    'phone' =>
    int(-5222)
  }
  [2] =>
  array(4) {
    'first_name' =>
    string(4) "Bill"
    'last_name' =>
    string(5) "Smith"
    'email' =>
    string(6) "email3"
    'phone' =>
    int(-6420)
  }
}

php > print_r($test);
Array
(
    [0] => Array
        (
            [first_name] => Denali
            [last_name] => Endicott
            [email] => email
            [phone] => -4442
        )

    [1] => Array
        (
            [first_name] => Bob
            [last_name] => Jones
            [email] => email2
            [phone] => -5222
        )

    [2] => Array
        (
            [first_name] => Bill
            [last_name] => Smith
            [email] => email3
            [phone] => -6420
        )

)


#Version 2

php > $person1 = ['first_name' => 'Denali', 'last_name' => 'Endicott', 'email' => 'email', 'phone' => 867-5309];
php > $person2 = ['first_name' => 'Bob', 'last_name' => 'Jones', 'email' => 'email2', 'phone' => 333-5555];
php > $person3 = ['first_name' => 'Bill', 'last_name' => 'Smith', 'email' =>'email3', 'phone' => 123-6543];
php > $test = [$person1, $person2, $person3];

php > var_dump($test);
array(3) {
  [0] =>
  array(4) {
    'first_name' =>
    string(6) "Denali"
    'last_name' =>
    string(8) "Endicott"
    'email' =>
    string(5) "email"
    'phone' =>
    int(-4442)
  }
  [1] =>
  array(4) {
    'first_name' =>
    string(3) "Bob"
    'last_name' =>
    string(5) "Jones"
    'email' =>
    string(6) "email2"
    'phone' =>
    int(-5222)
  }
  [2] =>
  array(4) {
    'first_name' =>
    string(4) "Bill"
    'last_name' =>
    string(5) "Smith"
    'email' =>
    string(6) "email3"
    'phone' =>
    int(-6420)
  }
}
php >

php > print_r($test);
Array
(
    [0] => Array
        (
            [first_name] => Denali
            [last_name] => Endicott
            [email] => email
            [phone] => -4442
        )

    [1] => Array
        (
            [first_name] => Bob
            [last_name] => Jones
            [email] => email2
            [phone] => -5222
        )

    [2] => Array
        (
            [first_name] => Bill
            [last_name] => Smith
            [email] => email3
            [phone] => -6420
        )

)
php >


#Version 3

php > $test = array('person1' => array('first_name' =>'Denali', 'last_name' => 'Endicott', 'email' => 'email1@email.com', 'phone' => '210-678-3456'), 'person2' => array('first_name' => 'Bobbie', 'last_name' => 'Joe', 'email' => 'email2@email.com', 'phone' => '210-345-8765'), 'person3' => array('first_name' => 'Joe', 'last_name' => 'Bobbie', 'email' => 'email3@email.com', 'phone' => '210-345-5677'));

php > var_dump($test);
array(3) {
  'person1' =>
  array(4) {
    'first_name' =>
    string(6) "Denali"
    'last_name' =>
    string(8) "Endicott"
    'email' =>
    string(16) "email1@email.com"
    'phone' =>
    string(12) "210-678-3456"
  }
  'person2' =>
  array(4) {
    'first_name' =>
    string(6) "Bobbie"
    'last_name' =>
    string(3) "Joe"
    'email' =>
    string(16) "email2@email.com"
    'phone' =>
    string(12) "210-345-8765"
  }
  'person3' =>
  array(4) {
    'first_name' =>
    string(3) "Joe"
    'last_name' =>
    string(6) "Bobbie"
    'email' =>
    string(16) "email3@email.com"
    'phone' =>
    string(12) "210-345-5677"
  }
}
php >

#Version 4
php > $test = ['person1' => ['first_name' =>'Denali', 'last_name' => 'Endicott', 'email' => 'email1@email.com', 'phone' => '210-678-3456'], 'person2' => ['first_name' => 'Bobbie', 'last_name' => 'Joe', 'email' => 'email2@email.com', 'phone' => '210-345-8765'], 'person3' => ['first_name' => 'Joe', 'last_name' => 'Bobbie', 'email' => 'email3@email.com', 'phone' => '210-345-5677']];

php > var_dump($test);
array(3) {
  'person1' =>
  array(4) {
    'first_name' =>
    string(6) "Denali"
    'last_name' =>
    string(8) "Endicott"
    'email' =>
    string(16) "email1@email.com"
    'phone' =>
    string(12) "210-678-3456"
  }
  'person2' =>
  array(4) {
    'first_name' =>
    string(6) "Bobbie"
    'last_name' =>
    string(3) "Joe"
    'email' =>
    string(16) "email2@email.com"
    'phone' =>
    string(12) "210-345-8765"
  }
  'person3' =>
  array(4) {
    'first_name' =>
    string(3) "Joe"
    'last_name' =>
    string(6) "Bobbie"
    'email' =>
    string(16) "email3@email.com"
    'phone' =>
    string(12) "210-345-5677"
  }
}
php >

php > print_r($test);
Array
(
    [person1] => Array
        (
            [first_name] => Denali
            [last_name] => Endicott
            [email] => email1@email.com
            [phone] => 210-678-3456
        )

    [person2] => Array
        (
            [first_name] => Bobbie
            [last_name] => Joe
            [email] => email2@email.com
            [phone] => 210-345-8765
        )

    [person3] => Array
        (
            [first_name] => Joe
            [last_name] => Bobbie
            [email] => email3@email.com
            [phone] => 210-345-5677
        )

)
php >

/* 
Incretmenting and decrementing

$a = 10;
echo ++$a;
echo $a++;
echo $a;
$b = 20;
echo --$b;
echo $b--;
echo $b;
*/

php > $a = 10;
php > echo ++$a;
11
php > echo $a++;
11
php > echo $a;
12
php > $b = 20;
php > echo --$b;
19
php > echo $b--;
19
php > echo $b;
18
php >

# && is evaluated by PHP before ||

/* 
var_dump() the results of the expression $x < $y < $z. The result should be bool(TRUE)
var_dump() the results of the expression $x > $y < $z. The result should be bool(FALSE)
var_dump() the results of the expression $x > $y || $y < $z. The result should be bool(TRUE).
var_dump() the results of the expression $x > $y || !($y < $z). The result should be bool(FALSE). 
*/

$x = 0;
$y = 5;
$z = 10

php > var_dump( $x < $y && $y < $z );
bool(true)
php >

php > var_dump( $x > $y && $y < $z );
bool(false)
php >

php > var_dump( $x > $y || $y < $z );
bool(true)
php >

php > var_dump( $x > $y || !($y < $z) );
bool(false)
php >

