<?php

class Posts
{
    public static function selecionaTodos(){
        $con = Connection::getConn();

        $sql = "SELECT * FROM postagem ORDER BY id_postagem DESC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $outcome = array();

        while($row = $sql->fetchObject('Posts')){
            $outcome[] = $row;
        }

        if(!$outcome){
            throw new Exception("Não foi encontrado nenhum registro no banco de dados");
        }
        return $outcome;
    }

    public static function selectPostId($idPost)
    {
        $con = Connection::getConn();
        $sql = "SELECT * FROM postagem WHERE id_postagem = :id";
        $sql = $con->prepare($sql);
        $sql->bindValue(':id', $idPost, PDO::PARAM_INT);
        $sql->execute();

        $result = $sql->fetchObject('Posts');

        if(!$result){
            throw new Exception("Não foi encontrado registros no banco de dados");
        }else{
            $result->comments = Comments::selectComments($result->id_postagem);
        }
        return $result;
    }

}