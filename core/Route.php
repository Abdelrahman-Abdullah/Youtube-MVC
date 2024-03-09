<?php

namespace core;

/**
 * Class Route to handle all routes
*/
class Route
{
    /**
     * @var array $routes to store all routes
    */
    public static array $routes = []; // Store all routes

    /**
     * get method to handle all get requests
     * @param string $url
     * @param string|\Closure $action
     * @return void
    */
    public static function get($url, $action): void
    {
        // Route::get('url' , 'action')
        // Rote::get('home', 'HomeController@index')
        self::$routes['get'][$url] = $action;
    }

    /**
     * post method to handle all post requests
     * @param string $url
     * @param string $action
     * @return void
    */
    public static function post($url, $action)
    {
        // Route::post('url' , 'action')
        // Rote::post('home', 'HomeController@index')
        self::$routes['post'][$url] = $action;
    }

    /**
     * resolve method to check if route exist or not and handel the route accordingly
     * @return void
    */
    public static function resolve(): void
    {
        $uri = Request::uri();
        $method = Request::method();
        $action = self::$routes[$method][$uri] ?? false;
        if($action === false)
        {
            echo "404 Not Found";
            exit;
        }
        if (is_string($action))
        {
            self::callAction($action);
            exit;
        }
        $action();
    }

    /**
     * callAction method to call the controller and it's method
     * @param string $action
     * @return void
    */
    private static function callAction($action)
    {
        $action = explode('@', $action);
        $controllerClass = "app\\controllers\\". $action[0];
        $method = $action[1];
        $controllerObject = new $controllerClass();
        $controllerObject->$method();
    }


}