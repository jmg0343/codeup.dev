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


// -----------------------------TRY/CATCH------------------------------
    // $errors = [];
    // try {
    //     throw new Exception("Value at index '$key' is not a string");   
    // } catch (Exception $e) {
    //     $errors[] = $e->getMessage();
    // }

    // try {
    //     throw new Exception("Value at index '$key' is not a number");   
    // } catch (Exception $e) {
    //     $errors[] = $e->getMessage();
    // }
//     try {
//         if (! self::has($key)) {
//             throw new Exception("Request does not contain key: '$key'");
//         }

//         $value = self::get($key);

//     } catch (Exception $e) {
//         $errors[] = $e->getMessage();
//     }

//     try {
//         if (gettype($value) != 'string') {
//             throw new Exception("Value at index '$key' is not a string"); 
//         } 

//         return $value;

//     } catch (Exception $e) {
//         $errors[] = $e->getMessage();
//     }
// // ---------------------------------------------------------------------
    // public static function getString($key)
    // {
    //     try {
    //         if (! self::has($key)) {
    //             throw new Exception("Request does not contain key: '$key'");
    //         }

    //     $value = self::get($key);

    //     } catch (Exception $e) {
    //         $errors[] = $e->getMessage();
    //     }

    //     try {
    //         if (gettype($value) != 'string') {
    //             throw new Exception("Value at index '$key' is not a string"); 
    //         } 


    //     } catch (Exception $e) {
    //         $errors[] = $e->getMessage();
    //     } 
    //     return $value;
    // } 

    // public static function getNumber($key)
    // {
    //     try {
    //         if (! self::has($key)) {
    //             throw new Exception("Request does not contain key: '$key'");
    //         }

    //     $value = self::get($key);
        
    //     } catch (Exception $e) {
    //         $errors[] = $e->getMessage();
    //     }

    //     try {
    //         if (! is_numeric($value)) {
    //             throw new Exception("Value at index '$key' is not a number"); 
    //         } 


    //     } catch (Exception $e) {
    //         $errors[] = $e->getMessage();
    //     }
    //     return $value;
    // }   

// ---------------------------------------------------------------------

  

    public static function getString($key)
    {
        if (! self::has($key)) {
            throw new Exception("Request does not contain key: '$key'");
        }

        $value = self::get($key);

        if (gettype($value) != 'string') {
            throw new Exception("Value at index '$key' is not a string"); 
        }

        return $value;
    }

    public static function getNumber($key)
    {
        if (! self::has($key)) {
            throw new Exception("Request does not contain key: '$key'");
        }

        $value = self::get($key);

        if(! is_numeric($value)) {
            throw new Exception("Value '$value' is not a number");
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




