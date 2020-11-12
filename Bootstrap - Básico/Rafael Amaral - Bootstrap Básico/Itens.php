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

<div class="box_produto col mb-1 border border-dark" id="<?php echo $rows ["categoria"]; ?>">

<img src="<?php echo $rows ["imagem"]; ?>" width="120px" onclick="destaque(this)">
<br>

<p class="nome_produto"><?php echo $rows ["descricao"]; ?></p>
<hr>

<p class=""><del> R$ <?php echo $rows ["preco_antigo"]; ?></del></p>
<p class="text-danger font-weight-bold">R$ <?php echo $rows ["preco_venda"]; ?></p><br>            


<form method="post">
    <button type="submit" class="btn btn-danger font-weight-bold" onmouseover="porCima(this)" onmouseout="porFora(this)">COMPRAR</button>
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