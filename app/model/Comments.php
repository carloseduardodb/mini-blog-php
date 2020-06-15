<?php


class Comments
{
    public static function selectComments($id_post){
        $con = Connection::getConn();
        $sql = "SELECT * FROM comentario WHERE id_postagem = :id";
        $sql = $con->prepare($sql);
        $sql->bindValue(':id', $id_post, PDO::PARAM_INT);
        $sql->execute();

        $result = array();

        while ($row = $sql->fetchObject('comments')){
            $result[] = $row;
        }
        return $result;
    }
}