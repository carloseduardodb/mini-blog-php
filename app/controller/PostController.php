<?php

 class PostController{
    public function index($params){
        try
        {
            $post = Posts::selectPostId($params);
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('struct_view_post.html');

            $params = array();
            $params['titulo'] = $post->titulo;
            $params['conteudo'] = $post->conteudo;
            $params['comentarios'] = $post->comments;

            $content = $template->render($params);

            echo $content;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
 }