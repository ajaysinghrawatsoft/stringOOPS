<?php
declare(strict_types = 1);
require __DIR__ . '/vendor/autoload.php';

use App\MString;
//use src\MString;
$mString = new MString();
echo "Enter the string to continue: ";

// open the cli
$handle = fopen ("php://stdin","r");

// get the string from cli
$line = fgets($handle);
echo "\n";
echo "String to uppercase : ".$mString->upperCaseIsString($line);
echo "\n";
echo "String to alternate upper : ".$mString->alternateUpperLower($line);
echo "\n";
$mString->generateStringCsv(trim($line));
die;

