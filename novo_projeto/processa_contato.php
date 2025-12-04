<?php
// processa_contato.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nome = htmlspecialchars($_POST['nome']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Validação básica
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erro'] = "Email inválido!";
        header('Location: index.php?pg=faleconosco');
        exit;
    }
    
    if (empty($nome) || empty($mensagem)) {
        $_SESSION['erro'] = "Preencha todos os campos!";
        header('Location: index.php?pg=faleconosco');
        exit;
    }
    
    // Aqui você pode:
    // 1. Salvar no banco de dados
    // 2. Enviar email
    // 3. Processar de outra forma
    
    $_SESSION['sucesso'] = "Mensagem enviada com sucesso! Entraremos em contato em breve.";
    header('Location: index.php?pg=faleconosco');
    exit;
} else {
    header('Location: index.php?pg=faleconosco');
    exit;
}
?>