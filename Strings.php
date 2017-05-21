<?php

namespace Amarkal\Validation;

class Strings
{
    static function length_less_than( $str, $length )
    {
        return strlen($str) < $length;
    }
    
    static function length_greater_than( $str, $length )
    {
        return strlen($str) > $length;
    }
    
    static function match( $str, $regex )
    {
        return preg_match($regex, $str) === 1;
    }
    
    static function is_email( $str )
    {
        return \is_email( $str ) !== false;
    }
}