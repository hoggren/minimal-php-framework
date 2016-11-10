<?php

class Router
{
    static $actions = [];

    public static function get($route, $action) {
        self::$actions['GET' . '@' . $route] = $action;
    }

    public static function error($route) {
        return 'No route for "' . $route . '"';
    }

    public static function render() {
        $key = $_SERVER['REQUEST_METHOD'] . '@' . $_SERVER['REQUEST_URI'];

        if (array_key_exists($key, self::$actions)) {
            $action = self::$actions[$key];

            $result = new Result();
            $action($result);

            $result->render();
        } else {
            echo self::error($_SERVER['REQUEST_URI']);
        }
    }
}
