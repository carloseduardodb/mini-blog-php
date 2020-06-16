<?php

class Core
{
    public function start($url_get)
    {
        if (isset($url_get['method'])) {
            $action = $url_get['method'];
        } else {
            $action = 'index';
        }

        if(isset($url_get['page'])){
            $controller = ucfirst($url_get['page'].'Controller');
        }else{
            $controller = 'HomeController';
        }

        if(!class_exists($controller)){
            $controller = 'ErrorController';
        }

        if(isset($url_get['id']) && $url_get['id'] != null){
            $id = $url_get['id'];
        }else{
            $id = null;
        }

        call_user_func_array(array(new $controller, $action), array('id' => $id));

    }
}