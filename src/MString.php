<?php
declare(strict_types = 1);
namespace App;

class MString
{
    private $str;

    public function __construct($str = '')
    {
        $this->str = $str;
    }

    public function upperCaseIsString(String $str) : String
    {
        return strtoupper($str);
    }

    public function alternateUpperLower(String $str): String
    {
        $stringArr = str_split($str);
        $returnString = '';
        foreach ($stringArr as $key => $value)
        {
            $returnString .= ($key % 2 === 0) ? strtolower($value) : strtoupper($value);
        }
        return $returnString;
    }

    public function generateStringCsv(String $str)
    {
        $strLower = strtolower($str);
        $strArr = str_split($strLower);
        $file = fopen('demosaved.csv', 'w');
        fputcsv($file, $strArr);
        fclose($file);
        echo "CSV created!";
    }
}