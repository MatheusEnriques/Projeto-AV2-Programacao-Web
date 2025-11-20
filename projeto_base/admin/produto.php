<?php

    require_once 'config.inc.php';

    $produto = $_REQUEST['produto'];
    $preco = $_REQUEST['preco'];


    $sql = "INSERT INTO produto (Produto, Preço) 
            VALUES ('$produto','$preco')";



    if(mysqli_query($conexao, $sql)){
        echo "<h2>Cliente cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar</h2>";
    }

    mysqli_close($conexao);

