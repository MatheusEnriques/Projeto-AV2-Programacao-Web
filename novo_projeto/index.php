<?php
    // 1. Inclusão dos componentes fixos (Topo e Menu)
    include_once "topo.php";
    //include_once "menu.php";

    // ----------------------------------------------------
    // Lógica de Roteamento de Conteúdo (Corrigida e Mais Segura)
    // ----------------------------------------------------
    
    // Define a página padrão
    $pg = "conteudo"; 

    // Lista de páginas permitidas (segurança extra)
    $paginas_permitidas = [
    'conteudo', 'quemsomos', 'clientes', 
    'faleconosco', 'produtos', 'reserva', 'pacote', 'redes-sociais'
    ];

    // Verifica se o parâmetro 'pg' foi passado na URL e se não está vazio
    if(isset($_GET['pg']) && !empty($_GET['pg'])){
        // Remove caracteres perigosos
        $pg_temp = basename($_GET['pg']);
        
        // Verifica se a página está na lista permitida
        if(in_array($pg_temp, $paginas_permitidas)){
            $pg = $pg_temp;
        }
    }

    // Define o caminho completo do arquivo
    $filepath = "$pg.php";

    // Verifica se o arquivo existe antes de incluí-lo
    if (file_exists($filepath)) {
        echo '<main class="container main-content">'; // Container para o conteúdo
        include_once $filepath;
        echo '</main>';
    } else {
        // Exibe uma mensagem de erro 404 estilizada
        echo '<main class="container main-content">';
        echo "<div class='error-404 mt-5'>";
        echo "<h2>Erro 404</h2>";
        echo "<p>Página <b>$pg</b> não encontrada. Por favor, verifique o endereço.</p>";
        echo "<a href='?pg=conteudo' class='btn btn-primary'>Voltar para Home</a>";
        echo "</div>";
        echo '</main>';
    }
    // ----------------------------------------------------
    
    // 2. Inclusão do Rodapé fixo
    include_once "rodape.php";
?>