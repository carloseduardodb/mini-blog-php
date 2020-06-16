<?php

class AdminController{
    public function index(){
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('struct_admin.html');

        $objPost = Posts::selectAll();

        $parameter = array();
        $parameter['posts'] = $objPost;
        echo $template->render($parameter);
    }

    public function create(){
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('struct_admin_create_pub.html');

        echo $template->render();
    }

    public function insert(){
        try {
            Posts::insert($_POST);
            echo '<script>alert("Publicação inserida com sucesso!");</script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=index"</script>';
        }catch (Exception $e){
            echo '<script>alert("'.$e->getMessage().'");</script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=create"</script>';
        }
    }

    public function delete(){
        try{
            Posts::delete($_GET);
            echo '<script>alert("Publicação apagada com sucesso!");</script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=index"</script>';
        }catch (Exception $e){
            echo '<script> alert("'.$e->getMessage().'"); </script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=index"</script>';
        }
    }

    public function updateView($identify){
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('struct_admin_update_pub.html');

        $objPost = Posts::selectPostId($identify);

        $parameter = array();
        $parameter['id'] = $objPost->id_postagem;
        $parameter['titulo'] = $objPost->titulo;
        $parameter['conteudo'] = $objPost->conteudo;

        echo $template->render($parameter);
    }

    public function update(){
        try{
            Posts::update($_POST);
            echo '<script>alert("Publicação atualizada com sucesso!");</script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=index"</script>';
        }catch (Exception $e){
            echo '<script> alert("'.$e->getMessage().'"); </script>';
            echo '<script>location.href="http://localhost/PHPStorm/mini_blog/?page=admin&method=index"</script>';
        }
    }
}