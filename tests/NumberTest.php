<?php

require_once 'Number.php';

use PHPUnit\Framework\TestCase;
use Amarkal\Validation\Number;

/**
 * To run the tests, use the following command:
 * $ phpunit tests.php
 */

class NumberTest extends TestCase
{
    public function test_is_numeric()
    {
        $this->assertTrue(Number::is_numeric(3));
        $this->assertTrue(Number::is_numeric(3.1));
        $this->assertTrue(Number::is_numeric(-3));
        $this->assertTrue(Number::is_numeric('3'));
        $this->assertFalse(Number::is_numeric('hello'));
        $this->assertFalse(Number::is_numeric(false));
        $this->assertFalse(Number::is_numeric(array()));
    }
    
    public function test_is_int()
    {
        $this->assertTrue(Number::is_int(1));
        $this->assertTrue(Number::is_int(-1));
        $this->assertFalse(Number::is_int(1.1));
    }
    
    public function test_is_float()
    {
        $this->assertTrue(Number::is_float(1.1));
        $this->assertTrue(Number::is_float(-1.1));
        $this->assertTrue(Number::is_float(-1.0));
        $this->assertFalse(Number::is_float(1));
    }
    
    public function test_greater_than()
    {
        $this->assertTrue(Number::greater_than(3, 2));
        $this->assertFalse(Number::greater_than(2, 3));
        $this->assertFalse(Number::greater_than(2, 2));
    }
    
    public function test_less_than()
    {
        $this->assertTrue(Number::less_than(3, 4));
        $this->assertFalse(Number::less_than(2, 1));
        $this->assertFalse(Number::less_than(2, 2));
    }
    
    public function test_in_range()
    {
        $this->assertTrue(Number::in_range(3, 2, 4));
        $this->assertTrue(Number::in_range(3.5, 3, 4));
        $this->assertTrue(Number::in_range(3, 3, 3, true));
        $this->assertFalse(Number::in_range(3, 5, 6));
        $this->assertFalse(Number::in_range(3, 5, 6, true));
    }
}