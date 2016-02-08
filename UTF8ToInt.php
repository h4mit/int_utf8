<?php
/**
 * User: H4mit (H4mid.Taheri@gmail.com)
 * Date: 19/10/2015
 * Time: 10:38 AM
 * :) Hii
 */

class UTF8ToInt
{
    /**
     * @param $utf8
     * @return int
     */
    public static function utf8_to_int($utf8){
        $len = strlen($utf8);
        $number = 0;
        for($i=1;$i<=floor($len/2);++$i)
        {
            $n = UTF8ToInt::UTF8NumberToInteger(substr($utf8, ($i - 1) * 2, 2));
            $number = ($number * 10 ) + $n;
        }
        return $number;
    }

    /**
     * @param one utf8 number
     * @return one integer digit number
     */
    private static function UTF8NumberToInteger($utf8Number)
    {
        switch($utf8Number)
        {
            case '۰':
                return 0;
                break;
            case '۱':
                return 1;
                break;
            case '۲':
                return 2;
                break;
            case '۳':
                return 3;
                break;
            case '۴':
                return 4;
                break;
            case '۵':
                return 5;
                break;
            case '۶':
                return 6;
                break;
            case '۷':
                return 7;
                break;
            case '۸':
                return 8;
                break;
            case '۹':
                return 9;
                break;
            default:
                return $utf8Number;
        }
    }
}