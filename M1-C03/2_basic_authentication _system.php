<?php

define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "Enter username: ";
$inputUserName = readline();

echo "Enter password: ";
$inputPassword = readline();

if($inputUserName === USERNAME && $inputPassword === PASSWORD){
echo "login successful!";
}else{
echo "Invalid user or password";
}