<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>
<body>
    <form method="post">
        <label>Nome</label>
        <input type="text" name="txtNome" ><br>
        <label>Email</label>
        <input type="email" name="txtEmail"><br>
        <label>Senha</label>
        <input type="password" name="txtSenha"><br>
        <label>Confirmar senha</label>
        <input type="password" name="txtConf"><br>
        <input type="submit" name="btOk" value="Gravar">
    </form>
    <?php
        include "data/usuario.class.php";
        include "mapper/usuario.class.php";
        include "mapper/conexao.php";
        include "helper/usuarioHelper.php";

        $usuarioMapper = new UsuarioMapper();
        if(isset($_POST["btOk"])){
            if($_POST["txtSenha"]!=$_POST["txtConf"]){
                echo "As senhas não conferem";
                die();
            }
            $usuario = new Usuario(0, $_POST["txtNome"], 
            $_POST["txtEmail"], $_POST["txtSenha"]);
            
            $usuarioMapper->insert($usuario, $conexao);
        }
    ?>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="txtNome">
        <input type="submit" name="btFiltrar" value="Filtrar">
    </form>
    <?php
        if(isset($_POST["btFiltrar"])){
            $res = $usuarioMapper->selectFilter($_POST["txtNome"], $conexao);
        }else{
            $res = $usuarioMapper->select($conexao);
        }
        exibeTabela($res);
    ?>
</body>
</html>