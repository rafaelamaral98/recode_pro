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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>

    <body class="container-fluid mx-0 px-0">

        <?php
            include_once('Menu.html');
        ?>

        <br><br>
        
        <header>

            <h2>Contato</h2>

        </header>

        <hr>

        <table class="table">
            
            <tr>

                <td class="text-center w-50">
                    
                    <img src="Imagens/Email.png" width="40px">
                    contato@fullstackeletro.com

                </td>

                <td class="text-center w-50">
                    
                    <img src="Imagens/Whatsapp.png" width="40px">
                    (11) 99999-9999

                </td>

            </tr>

        </table>

        <br><br>

        <form class="form-group formulario" method="post" action="">

            <h4>Nome</h4>
            <input class="form-control" type="text" name="nome" placeholder="Escreva aqui o seu nome" class="caixa_mensagem">
            <h4>Mensagem</h4>
            <textarea rows="8" placeholder="Deixe aqui sua mensagem" name="msg" class=" form-control caixa_mensagem"></textarea>
            <input class="btn btn-lg mt-2 btn-danger" type="submit" value="Enviar">

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

        <?php
            include_once('Footer.html');
        ?>
        
    </body>
    
</html>