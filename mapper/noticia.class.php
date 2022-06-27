<?php
    class NoticiaMapper{
        public function insert($noticia, $conexao){
            try{
                $sql = "INSERT INTO noticia(titulo, texto, idusuario) 
                VALUES (?,?,?)";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $noticia->getTitulo());
                $stmt->bindValue(2, $noticia->getTexto());
                $stmt->bindValue(3, $noticia->getIdNoticia());
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro ao inserir a notícia";
            }
        }

        public function delete($idnoticia, $conexao){
            try{
                $sql = "DELETE FROM noticia WHERE 
                idnoticia=?";
                $stmt = $conexao->prepare($sql);
                $stmt->binValue(1, $idnoticia);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro ao apagar a notícia";
            }
        }

        public function update($noticia, $conexao){
            try{
                $sql = "UPDATE noticia SET titulo=?, texto=?, 
                idusuario=? WHERE idnoticia=?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $noticia->getTitulo());
                $stmt->bindValue(2, $noticia->getTexto());
                $stmt->bindValue(3, $noticia->getIdUsuario());
                $stmt->bindValue(4, $noticia->getIdNoticia());
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro ao atualizar a notícia";
            }
        }

    }