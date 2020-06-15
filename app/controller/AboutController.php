<?php


class AboutController
{
    public function index(){
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('struct_about.html');

        echo $content = $template->render();
    }
}