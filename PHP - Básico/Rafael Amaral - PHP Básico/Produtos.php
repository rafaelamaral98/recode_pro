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
    </head>

    <body>

        <?php
            include_once('Menu.html');
        ?>

        <br><br>

        <header>
            <h2>Produtos</h2>
        </header>
        
        <hr>

        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos (12)</li>
                <li onclick="exibir_categoria('geladeiras')">Geladeiras (3)</li>
                <li onclick="exibir_categoria('fogoes')">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                <li onclick="exibir_categoria('lava_roupas')">Lavadora de Roupas (2)</li>
                <li onclick="exibir_categoria('lava_loucas')">Lava-Louças (2)</li>
            </ul>
            <hr>
        </section>


        <section class="produtos">  

            <?php

                $sql = "select * from produtos";
                $resultado = $conexao -> query($sql);

                if(!$conexao){
                    die ("Sem conexao" . mysqli_connect_error());
                }
                
                    if(isset($_POST['cliente']) && isset($_POST['produto']) && isset($_POST['valor_unitario'])) {
                        $cliente= $_POST['cliente'];
                        $produto= $_POST['produto']; 
                        $valor_unitario= $_POST['valor_unitario'];                       
                        $sql="insert into pedidos (cliente, produto, valor_unitario) values ('$cliente', '$produto', '$valor_unitario')";
                        $envio = $conexao -> query($sql);
                    }              
                
                if($resultado -> num_rows > 0) {
                    while($rows = $resultado -> fetch_assoc()) {                        
            ?> 
                
                <div class="box_produto" id="<?php echo $rows ["categoria"]; ?>">

                <img src="<?php echo $rows ["imagem"]; ?>" width="120px" onclick="destaque(this)">
                <br>

                <p class="nome_produto"><?php echo $rows ["descricao"]; ?></p>
                <hr>

                <p class="preco_antigo">R$ <?php echo $rows ["preco_antigo"]; ?></p>
                <p class="preco_atual">R$ <?php echo $rows ["preco_venda"]; ?></p><br>            
               

                <form method="post">
                    <button type="submit" class="botao" onmouseover="porCima(this)" onmouseout="porFora(this)">COMPRAR</button>
                    <input type="hidden" name="cliente" value="cliente_default">
                    <input type="hidden" name="produto" value=<?php echo $rows ["descricao"]; ?> >
                    <input type="hidden" name="valor_unitario" value=<?php echo $rows ["preco_venda"]; ?> >

                </form>
                <br><br>               

                </div>


            <?php            
                    }
                }    
                else {
                    echo "Nenhum produto cadastrado!";
                }

            ?>

        </section>          
                
        <footer id="copyright">
            <p id="formas_pagamento">Formas de Pagamento:</p>      
            <img src="Imagens/Formas de Pagamento.jpg" alt="Formas de Pagamento">

            <p>&copy; Rafael Amaral</p>
        </footer>
        
    </body>

</html>