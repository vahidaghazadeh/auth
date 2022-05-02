<?php
namespace Magenfa\Core;

class Controller extends Response
{
    public function view($view, $params = null){
        return App::$app->router->renderView($view, $params);
    }

    public function response($params){
        return App::$app->response->json($params);
    }
}