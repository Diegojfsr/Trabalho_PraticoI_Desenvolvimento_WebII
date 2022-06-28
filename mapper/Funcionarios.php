<?php
    class FuncionariosMapper{
        private $Funcionarios;


        public function insert($Funcionarios, $conexao){
            try{
                $sql = "INSERT INTO Funcionarios(NomeFuncionario, EmailFuncionario, SenhaFuncionario)
                VALUES(?,?,?)";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $usuario->getNome());
                $stmt->bindValue(2, $usuario->getEmail());
                $stmt->bindValue(3, MD5($usuario->getSenha()));
                $stmt->execute();
                echo "Usuario inserido com sucesso!";
            }catch(PDOException $e){
                echo "Erro ao inserir o usuário";
            }
        }

        public function delete($idusuario, $conexao){
            try{
                $sql = "DELETE FROM usuario WHERE idusuario=?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $idusuario);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro ao apagar o usuário";
            }
        }

        public function update($usuario, $conexao){
            try{
                $sql = "UPDATE usuario SET nome=?, email=?,
                senha=? WHERE idusuario=?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $usuario->getNome());
                $stmt->bindValue(2, $usuario->getEmail());
                $stmt->bindValue(3, MD5($usuario->getSenha()));
                $stmt->bindValue(4, $usuario->getIdUsuario());
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro ao atualizar o usuário";
            }
        }

        public function select($conexao){
            try{
                $sql = "SELECT * FROM usuario";
                $stmt = $conexao->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                return array();
            }
        }

        public function selectFilter($nome, $conexao){
            try{
                $sql = "SELECT * FROM usuario WHERE nome LIKE ?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, "%".$nome."%");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                return array();
            }
        }
    }