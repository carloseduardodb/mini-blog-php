<?php

class HomeController
{
    public function index(){
        //echo 'Carlos';
        try
        {
            $collect_posts = Posts::selecionaTodos();

            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('struct_post.html');

            $params = array();
            $params['posts'] = $collect_posts;

            $content = $template->render($params);

            echo $content;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
}