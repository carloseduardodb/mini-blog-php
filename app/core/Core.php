<?php

class Core
{
    public function start($url_get)
    {
        $action = 'index';

        if(isset($url_get['page'])){
            $controller = ucfirst($url_get['page'].'Controller');
        }else{
            $controller = 'HomeController';
        }

        if(!class_exists($controller)){
            $controller = 'ErrorController';
        }

        call_user_func_array(array(new $controller, $action), array());

    }
}