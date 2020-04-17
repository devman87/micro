<?php

declare(strict_types=1);

namespace app\core;

class Route
{
    public static function start(): void
    {
        $routes = include(ROOT . 'app/config/routes.php');
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        foreach ($routes as $uri_pattern => $path) {
            if (preg_match("~^$uri_pattern$~", $uri) === 1) {
                $pattern = $uri_pattern;
                $replacement = $path;
                $subject = $uri;
                break;
            }
        }

        if (isset($pattern)) {
            $internal_route = preg_replace("~$pattern~", $replacement, $subject);
            $segments = explode(':', $internal_route);
            $controller = 'app\controllers\\' . ucwords($segments[0], '\\/');
            $segments = explode('/', $segments[1]);
            $action = array_shift($segments);
            call_user_func_array([new $controller, $action], $segments);
        } else {
            http_response_code(404);
            exit;
        }
    }
}