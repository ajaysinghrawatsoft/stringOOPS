<?php
declare(strict_types=1);

use App\MString;
use PHPUnit\Framework\TestCase;

class MStringTest extends TestCase
{
    protected $str;

    public function setUp()
    {
        $this->mStr = new MString();
    }

    public function testUpperCaseIsString()
    {
        $tstr = "hello world";
        $this->assertEquals("HELLO WORLD", $this->mStr->upperCaseIsString($tstr));
    }

    public function testAlternateUpperLower()
    {
        $tstr = "hello world";
        $this->assertEquals("hElLo wOrLd", $this->mStr->alternateUpperLower($tstr));
    }
}
