<?php
// dados.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = htmlspecialchars($_POST['cliente']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST['telefone']);
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    // Validação
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erro_reserva'] = "Email inválido!";
        header('Location: index.php?pg=reserva');
        exit;
    }
    
    if (empty($cliente) || empty($data) || empty($hora)) {
        $_SESSION['erro_reserva'] = "Preencha todos os campos obrigatórios!";
        header('Location: index.php?pg=reserva');
        exit;
    }
    
    // Aqui você salvaria no banco de dados
    // Exemplo: INSERT INTO reservas (cliente, email, telefone, data, hora) VALUES (...)
    
    $_SESSION['sucesso_reserva'] = "Reserva enviada com sucesso! Confirmaremos por email.";
    header('Location: index.php?pg=conteudo');
    exit;
} else {
    header('Location: index.php?pg=reserva');
    exit;
}
?>