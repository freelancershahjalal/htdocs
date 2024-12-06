<?php
/*
echo "Hello World";

$x = 1;
$y = 3;
$z = 9;

echo $x + $y - $z;

$z = 9;

$name = "Shahjalal";

echo $name;
*/

// Why What How Variable
/*
$name = "Shahjalal";

echo $name;
*/

// Variable Naming Conventions
// $first_name = "Shahjalal";
// $last_name = "Khan";

// echo $first_name, $last_name;

// $firstName = "Md";
// $midalName = "Shahjalal";
// $lastName = "Khan";

// echo $firstName, $midalName, $lastName;

// Variable Types/Data Type (String, Integer, Float/double, Boolean, Array, Object, null)

/*
// String Variable Types/Data Types
$first_name = "Md.Rakib";
$last_name = "Khan";

echo $first_name, $last_name;
*/

// Integer Variable Types/Data Types

// $number = 40;

// echo $number;

/*
// Float/Double Variable Types/Data Types

$price = 100.50;

echo $price;
*/

/*
// Boolean Variable Types/Data Types
$is_admin = True;
$is_pending = false;

echo $is_admin, $is_pending;
*/

// Array Variable Types/Data Types
// $fruits = ["Apple", "Banana", "Orange", "Mango", "Pineapple"];

// echo $fruits;

// $fruits = array("Apple", "Banana", "Orange", "Mango", "pineapple");
// echo $fruits;

// Object Variable Types/Data 
// Class Person{
//     public $name;
//     public $age;
// }
// $person1 = new Person();
// $person1->name = "John";
// $person1->age = "25";

// Null Variable Types/Data Types

// $name = "null"

/*
// Checking Variable Types

$number = 100;
$name = "Shahjalal";

echo gettype($number);
echo gettype($name);

*/

// Find variable memory location
class Test{
    public $name = "Rohan";
}
$obj = new Test();

echo spl_object_id($obj);

// Variable Scope local and global

// Local
// function greet (){
//     $message = "Hello World";
//     echo $message;
// }
// greet();

// echo $message;

// Global

$name = "John";

function greet(){
    global $name;
    echo "Hello " . $name ."!";
}
greet();

echo "Global" . $name;

// Supper Global
$_GET, $_POST, $_SERVER, $_SESSION, $_REQUEST




?>