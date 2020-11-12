<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "fseletro";
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(!$conexao){
    die ("Sem conexao" . mysqli_connect_error());
}

?>



<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="CSS/Estilo.css">
        <script src="JavaScript/funcoes.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>

    <body>

        <div class="container-fluid mx-0 px-0">

            <?php
                include_once('Menu.html');
            ?>

            <section class="categorias bg-dark">
                <nav class="navbar navbar-expand-lg container-fluid text-white">
                    <h3 class="navbar-brand font-weight-bold">Categorias</h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categoria_nav">
                    <span class="container-fluid text-white font-weight-bold">Mostrar</span>
                    </button>

                    <div id="categoria_nav" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item ml-4" onclick="exibir_todos()">Todos (12)</li>
                            <li class="nav-item ml-4" onclick="exibir_categoria('geladeiras')">Geladeiras (3)</li>
                            <li class="nav-item ml-4" onclick="exibir_categoria('fogoes')">Fogões (2)</li>
                            <li class="nav-item ml-4" onclick="exibir_categoria('microondas')">Microondas (3)</li>
                            <li class="nav-item ml-4" onclick="exibir_categoria('lava_roupas')">Lavadora de Roupas (2)</li>
                            <li class="nav-item ml-4" onclick="exibir_categoria('lava_loucas')">Lava-Louças (2)</li>
                        </ul>
                    </div>
                </nav>
                
            </section>            

            <header>
                <h2>Produtos</h2>
            </header> 
            
            <hr>           

            <div class="container-fluid">
                <section class="produtos row row-cols-2 row-cols-md-3 row-cols-lg-4"> 
                    

                    <?php
                        include_once('Itens.php');
                    ?>

                </section>
            </div>   
        </div>         
                
        <?php
            include_once('Footer.html');
        ?>
        
    </body>

</html>