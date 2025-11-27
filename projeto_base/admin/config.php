<?php 
$conn = mysqli_connect("localhost:3310","root","");
$bd = mysqli_select_db($conn, "reserva");

if($conn){

    echo("Conexão estabelecida com sucesso.");
}else {
    echo("Erro na conexão com banco de dados.");
}
?>