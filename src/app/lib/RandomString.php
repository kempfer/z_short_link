<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RandomString
 *
 * @author Kempfer
 */
class RandomString {

 /**
     *
     * @var array
     */
    private static $upper = array(
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
    );

    /**
     *
     * @var array
     */
    private static $lower = array(
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
    );

    /**
     *
     * @var array
     */
    private static $digits = array(
        '0','1','2','3','4','5','6','7','8','9'
    );

    /**
     *
     * @var array
     */
    private static $special = array(
        '!','@','#','$','%','^','&','*','(',')','-','_',':',';','|','>','<','/','@',',','.','+','{','}','=','[',']'
    );

    /**
     *
     * @param int $length
     * @return string
     */
    public static function upperCase ($length) {
        return self::get($length);
    }

    /**
     *
     * @param int $length
     * @return string
     */
    public static function lowerCase ($length) {
        return self::get($length,false, true);
    }

    /**
     *
     * @param int $length
     * @return string
     */
    public static function digits ($length) {
        return self::get($length,false, false, true);
    }

    /**
     *
     * @param int $length
     * @return string
     */
    public static function special ($length) {
        return self::get($length,false, false, false, true);
    }
    /**
     *
     * @param int $length
     * @param boolean $upper
     * @param boolean $lower
     * @param boolean $digits
     * @param boolean $special
     * @return string
     */
    public static function get ($length, $upper = true, $lower = false, $digits = false, $special = false){
        $arrayChars = array();
        if($upper){
            $arrayChars = array_merge($arrayChars, self::$upper);
        }
        if($lower){
            $arrayChars = array_merge($arrayChars, self::$lower);
        }
        if($digits){
            $arrayChars = array_merge($arrayChars, self::$digits);
        }
        if($special){
            $arrayChars = array_merge($arrayChars, self::$special);
        }
        shuffle($arrayChars);
        $size = count($arrayChars) -1;
        $randomString = '';
        while($length--) {
            $randomString .= $arrayChars[mt_rand(0,$size)];
        }
        return $randomString;
    }

            
}