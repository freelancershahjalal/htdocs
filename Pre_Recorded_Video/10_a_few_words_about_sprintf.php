<?php

$fname = "Isaac";
$lname = "Newton";

printf("His name is %s %s", $fname, $lname);

echo "\n";

$output = sprintf("His name is %s %s", $fname, $lname);
echo $output;

echo "\n";

$output = sprintf("His name is %s %s", $fname, $lname);
echo strtoupper($output);

echo "\n";

$output = sprintf("His name is %s %s", $fname, $lname);
echo strtolower($output);

echo "\n";