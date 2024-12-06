<?php

// if & else single condition

$age = 10;

if($age>=20){
    echo "Adult";
}else{
    echo "Minor";
}

echo "<br>";

// if & else single Multifull Condition

$marks = 95;

if($marks<33){
    echo "Grade F";
}elseif($marks<40){
    echo "Grade D";
}elseif($marks<50){
    echo "Grade C";
}elseif($marks<60){
    echo "Grade B";
}elseif($marks<70){
    echo "Grade A-";
}elseif($marks<80){
    echo "Grade A";
}elseif($marks<95){
    echo "Grade A+";
}elseif($marks<=100){
    echo "Grade Golden A+";
}else{
    echo "Unknown Result";
}

echo "<br>";

// Nested if & else condition

$marksNested = 32;
if($marksNested<33){
    echo "Fail";
}else{
    if($marksNested<40){
        echo "Grade: D";
    }else{
        if($marksNested<50){
            echo "Grade: C";
        }else{
            if($marksNested<60){
                echo "Grade: B";
            }else{
                if($marksNested<70){
                    echo "Grade: A-";
                }else{
                    if($marksNested<80){
                        echo "Grade: A";
                    }else{
                        if($marksNested <95){
                            echo "Garde: A+";
                        }else{
                            if($marksNested<=100){
                                echo "Grade: Golden A+";
                            }else{
                                echo "Unknown Result";
                            }
                        }
                    }
                }
            }
        }
    }
}

echo "<br>";

// Ternary Operators

$age = 18;
// if($age>=18){
//     echo "Adult";
// }else{
//     echo "Minor";
// }
$minorityCheck= ($age>=18)?"Adult":"Minor";
echo $minorityCheck;

echo "<br>";
// Switch Case
/*
$weather="Cloudy";

switch($weather){
    case "Sunny":
        echo "Its a Sunny Day. Lets Have Fun";
        break;    
    case "Cloudy":
        echo "Its Cloudy Today. But don't worry";
        break;
    case "Rainy":
        echo "Its Rainy Today. Take umb";
        break;
    case "Foggy":
        echo "Its Foggy. Have Fun";
        break;

    default: 
        echo "Unknown Weather";
}

*/
echo "<br>";

$weather="Foggy";

switch($weather){
    case "Sunny":
        echo "Its a Sunny Day. Lets Have Fun";
        break;
    case "Cloudy":
        echo "Its Cloudy Today. But don't worry";
        break;
    case "Rainy":
        echo "Its Rainy Today. Take umb";
        break;
    case "Foggy":
        echo "Its Foggy. Have Fun";
        break;

    default: "Unknown Weather";
}

echo "<br>";

$result = "";
if($result = True){
    echo "Congratulation";
}else{
    echo "Try Again";
}

echo "<br>";
// Ternary Operator Multiple Condition

// $age = 100;
// if($age<=12){
//     echo "Child";
// }elseif($age<18){
//     echo "Minor";
// }else{
//     echo "Adult";
// }

// echo "<br";

$age= 17;

$minorityCheck= ($age<=12)?"Child":(($age<18)?"Minor":"Adult");

echo $minorityCheck;



















?>