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
}