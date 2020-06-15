<?php

class AdminController{
    public function index(){
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('struct_admin.html');

        echo $template->render();
    }
}