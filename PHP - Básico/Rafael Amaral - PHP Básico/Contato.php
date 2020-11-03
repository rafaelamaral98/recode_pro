<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "fseletro";
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(!$conexao){
    die ("Sem conexao" . mysqli_connect_error());
}

    if(isset($_POST{'nome'}) && isset($_POST{'msg'})) {
        $nome= $_POST{'nome'};
        $msg= $_POST{'msg'};
       
        $sql="insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $resultado = $conexao -> query($sql);
    }

?>




<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="CSS/Estilo.css">
    </head>

    <body>

        <?php
            include_once('Menu.html');
        ?>

        <br><br>
        
        <header>

            <h2>Contato</h2>

        </header>

        <hr>

        <table class="tabela">
            
            <tr class="contato">

                <td class="contato td">
                    
                    <img src="Imagens/Email.png" width="40px">
                    contato@fullstackeletro.com

                </td>

                <td class="contato td">
                    
                    <img src="Imagens/Whatsapp.png" width="40px">
                    (11) 99999-9999

                </td>

            </tr>

        </table>

        <br><br>

        <form method="post" action="">

            <h4>Nome</h4>
            <input type="text" name="nome" placeholder="Escreva aqui o seu nome" class="caixa_mensagem">
            <h4>Mensagem</h4>
            <textarea placeholder="Deixe aqui sua mensagem" name="msg" class="caixa_mensagem"></textarea>
            <input type="submit" value="Enviar">

        </form>

        <?php

            $sql = "select * from comentarios";
            $resultado = $conexao -> query($sql);

            if($resultado -> num_rows > 0) {
                while($rows = $resultado -> fetch_assoc()) { 
                    echo "Data: ", $rows ['data'], "<br>";
                    echo "Nome: ", $rows ['nome'], "<br>";
                    echo "Mensagem: ", $rows ['msg'], "<br>";
                    echo "<hr>";
                }
            }                       

            else {
                echo "Nenhum comentário ainda!";
            }

        ?>

        
        <br><br><br><br>

        <footer id="copyright">

            <p id="formas_pagamento">Formas de Pagamento:</p>      
            <img src="Imagens/Formas de Pagamento.jpg" alt="Formas de Pagamento">

            <p>&copy; Rafael Amaral</p>

        </footer>
        
    </body>
    
</html>