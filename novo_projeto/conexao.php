<?php

$conn = mysqli_connect("localhost", "root", "");

$bd = mysqli_select_db($conn,"reserva");

if($conn){
    echo "Conexao estabelecida com sucesso";
}else{
    echo "Erro na coxexao com banco de dados.";
}


?>