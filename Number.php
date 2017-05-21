<?php

namespace Amarkal\Validation;

class Number
{
    static function is_numeric( $num )
    {
        return \is_numeric($num);
    }
    
    static function is_int( $num )
    {
        return \is_int($num);
    }
    
    static function is_float( $num )
    {
        return \is_float($num);
    }
    
    static function less_than( $num, $limit )
    {
        return self::is_numeric($num) && $num < $limit;
    }
    
    static function greater_than( $num, $limit )
    {
        return self::is_numeric($num) && $num > $limit;
    }
    
    static function in_range( $num, $min, $max, $inclusive = false )
    {
        if($inclusive)
        {
            return self::is_numeric($num) && $num <= $max && $num >= $min;
        }
        return self::is_numeric($num) && $num < $max && $num > $min;
    }
}