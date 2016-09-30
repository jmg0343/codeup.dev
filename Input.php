<?php

class Input
{
    public static $errors = [];
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        if (Input::has($key)) {
            return $_REQUEST[$key];
        } else {
            return null;
        }
    }

    public static function getString($key, $min, $max)
    {
// If the value is the wrong type, throw a DomainException
        if (! self::has($key)) {
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key: '$key'");
        }

        $value = self::get($key);

        if (gettype($value) != 'string') {
            // throw new Exception("Value at index '$key' is not a string"); 
            throw new InvalidArgumentException("Value at index '$key' is not a string");
        }
// If a string is shorter than $min or longer than $max, throw a LengthException
        if (strlen($value) < $min || strlen($value) > $max) {
            throw new LengthException("'Length of string must be within min and max range'");
        }

// If $key is not a string, or $min & $max are not numbers, throw an InvalidArgumentException.
        if(gettype($value) != 'string' && ! int($min) && !int($max)) {
            throw new InvalidArgumentException ("'$key' must be string, min and max must be integers");
        }

        return $value;
    }

    public static function getNumber($key, $min, $max)
    {
// If the requested key is missing from the input, throw an OutOfRangeException
        if (! self::has($key)) {
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key: '$key'");
        }

        $value = self::get($key);

        // if(! is_numeric($value)) {
        //     throw new Exception("Value '$value' is not a number");
        // }
        if(! is_int($value) && ! is_int($min) && ! is_int($max)) {
            throw new InvalidArgumentException("Value '$value' is not a number");
        }

// If a number is less than $min or larger than $max, throw a RangeException
        if($value < $min || $value > $max) {
            throw new RangeException("Value '$value' is not within range of accepted input");
        }

        return $value;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}






