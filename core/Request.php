<?php

namespace core;
/**
 * Request class to get the uri and method of the request
*/
class Request
{
    /**
     * Get the uri of the request or the root uri if it's empty
     * @return string
    */
    public static function uri(): string
    {
        return explode("/",
            trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),"/")
        )[2] ?? '/';
    }

    /**
     * Get the method of the request in lowercase
     * @return string
    */
    public static function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
