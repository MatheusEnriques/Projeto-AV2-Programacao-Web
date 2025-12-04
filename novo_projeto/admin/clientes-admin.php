<?php
require_once 'config.inc.php';

// Verificar se há mensagens
if(isset($_SESSION['mensagem'])){
    $tipo = $_SESSION['tipo_mensagem'] ?? 'info';
    $mensagem = $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
    unset($_SESSION['tipo_mensagem']);
    
    echo "<div class='alert alert-$tipo alert-dismissible fade show'>";
    echo "<i class='bi bi-info-circle'></i> $mensagem";
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
    echo "</div>";
}
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-people"></i> Gerenciar Clientes</h2>
    <a href="?pg=clientes-form" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Cliente
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM clientes ORDER BY cliente";
                    $resultado = mysqli_query($conexao, $sql);
                    
                    if(mysqli_num_rows($resultado) > 0){
                        while($dados = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>{$dados['id']}</td>";
                            echo "<td><strong>{$dados['cliente']}</strong></td>";
                            echo "<td>{$dados['cidade']}</td>";
                            echo "<td><span class='badge bg-secondary'>{$dados['estado']}</span></td>";
                            echo "<td>";
                            echo "<a href='?pg=clientes-form-altera&id={$dados['id']}' class='btn btn-sm btn-warning me-1' title='Editar'>";
                            echo "<i class='bi bi-pencil'></i>";
                            echo "</a>";
                            echo "<a href='?pg=clientes-excluir&id={$dados['id']}' class='btn btn-sm btn-danger' ";
                            echo "onclick=\"return confirm('Tem certeza que deseja excluir este cliente?');\" title='Excluir'>";
                            echo "<i class='bi bi-trash'></i>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center text-muted'>";
                        echo "<i class='bi bi-inbox'></i> Nenhum cliente cadastrado.";
                        echo "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php mysqli_close($conexao); ?>