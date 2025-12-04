<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($conexao,$sql);

?>
<div class="container mt-3">
    <h2>Lista de Produtos</h2>
    <p>Todos os Produtos que a empresa atende no momento</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?=$dados['ID']?></td>
            <td><?=$dados['Produto']?></td>
            <td><?=$dados['Preço']?></td>
            
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>