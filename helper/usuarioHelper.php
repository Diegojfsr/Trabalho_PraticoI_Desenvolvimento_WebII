<?php
    function exibeTabela($res){
        if(count($res)==0){
            echo "Nenhum usuário existente";
        }else{
            echo "<table border='1'>";
            echo "<tr><td>Nome</td></tr>";
            foreach($res as $linha){
                echo "<tr><td>{$linha['nome']}</td></tr>";
            }
            echo "</table>";
        }
    }