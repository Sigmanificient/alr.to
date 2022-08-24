<?php

namespace alr\core;

class Router
{
    public static function getRoute(): void
    {
        $uri = $_GET['uri'];
        $params = explode('/', $uri);

        $clsName = ucfirst($params[0]);
        $clsFile = ROOT_PATH . '/controllers/' . $clsName . '.php';

        if (!file_exists($clsFile)) {
            Response::json(array('error' => 'not found'));
        }

        require $clsFile;
        $resource = new $clsName();

        $request_method = strtolower(Request::get_method());
        $method_name = $request_method . ($params[1] ?? '');

        if (method_exists($resource, $method_name)) {
            Response::json($resource->$method_name());
        }
        else {
            Response::json(array('error' => 'not found'));
        }
    }
}
