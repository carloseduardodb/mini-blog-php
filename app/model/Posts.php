<?php

class Posts
{
    public static function selectAll(){
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

    public static function insert($dataPost){
        if(empty($dataPost['pub-name']) or empty($dataPost['pub-content'])){
            throw new Exception("Preencha todos os campos");

            return false;
        }

        $con = Connection::getConn();

        $sql = 'INSERT INTO postagem(titulo, conteudo) VALUES (:title, :content)';

        $sql = $con->prepare($sql);
        $sql->bindValue(':title', $dataPost['pub-name']);
        $sql->bindValue(':content', $dataPost['pub-content']);
        $res = $sql->execute();

        if($res == 0){
            throw new Exception("Falha ao inserir publicação");

            return false;
        }

        return true;
    }

    public static function delete($identify){
        if(empty($identify['id'])){
            throw new Exception("Você não adicionou uma identificação para excluir");

            return false;
        }

        $con = Connection::getConn();
        $sql = "DELETE from postagem WHERE id_postagem = :id";

        $sql = $con->prepare($sql);
        $sql-> bindValue(":id",$identify['id']);
        $res = $sql->execute();

        if($res == 0){
            throw new Exception("Falha ao inserir publicação");
            return false;
        }
        return true;
    }

    public static function update($data){
        if(empty($data['pub-name']) or empty($data['pub-content']) or empty($data['id'])){
            throw new Exception("Você precisa prreecher todos os campos para atualizar");
            return false;
        }
        $pub_id = $data['id'];
        $pub_title = $data['pub-name'];
        $pub_content = $data['pub-content'];

        $con = Connection::getConn();

        $sql = 'UPDATE postagem SET titulo = :title, conteudo = :content WHERE id_postagem = :id';
        $teste = $sql;
        $sql = $con->prepare($sql);
        $sql->bindValue(':title', $pub_title);
        $sql->bindValue(':content', $pub_content);
        $sql->bindValue(':id', $pub_id);
        $res = $sql->execute();

        if($res == 0){
            throw new Exception("Falha ao atualizar publicação");

            return false;
        }

        return true;
    }

}