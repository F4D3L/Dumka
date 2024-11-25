<?php
session_start(); // Inicia ou continua a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['id_login'])) {
    // Redireciona para a página de login se não estiver logado
    header("Location: /Login/index.php");
    exit();
}

// Obtém informações do tipo de usuário
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
?>

