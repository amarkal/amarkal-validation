<?php

require_once dirname(__DIR__).'/Strings.php';

use PHPUnit\Framework\TestCase;
use Amarkal\Validation\Strings;

class StringsTest extends TestCase
{
    public function test_length_less_than()
    {
        $this->assertTrue(Strings::length_less_than('abc', 4));
        $this->assertFalse(Strings::length_less_than('abc', 3));
        $this->assertFalse(Strings::length_less_than('abc', 2));
    }
    
    public function test_length_greater_than()
    {
        $this->assertTrue(Strings::length_greater_than('abc', 2));
        $this->assertFalse(Strings::length_greater_than('abc', 3));
        $this->assertFalse(Strings::length_greater_than('abc', 4));
    }
    
    public function test_match()
    {
        $this->assertTrue(Strings::match('abc', '/abc/'));
        $this->assertTrue(Strings::match('abcdef', '/cde/'));
        $this->assertFalse(Strings::match('abcdef', '/g/'));
    }
}