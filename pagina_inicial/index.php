<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados
session_start();

// Verifica se o usuário está logado
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="nav_bar">
    <button class="button_menu" id="menuButton">
        <div class="menu_line top_line"></div>
        <div class="menu_line middle_line"></div>
        <div class="menu_line bottom_line"></div>
    </button>

    <div class="logo">
        <img class="img" src="../img/logo.PNG" alt="logo">
    </div>
    <div class="button_div_menu">
        <ul class="nav_buttons">
            <button class="button_change" onclick="toggleTheme()">Modo contraste</button>

            <?php if (!$isLoggedIn): ?>
                <!-- Exibe botões de Login e Registro para usuários não autenticados -->
                <button class="button_login"><a href="../Login/index.php">Login</a></button>
                <button class="button_registro"><a href="../Registro/index.php">Registro</a></button>
            <?php else: ?>
                <!-- Exibe mensagem de boas-vindas e Logout para usuários autenticados -->
                <span>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <button class="button_logout"><a href="../Logout/logout.php">Logout</a></button>
            <?php endif; ?>
        </ul>
    </div>

    <ul id="menuList">
        <li><a href="../pagina_inicial/index.php"><img src="../img/home-icon.png" alt="Página Inicial" class="menu_icon">Página Inicial</a></li>
        <li><a href="../Exemplo_texto/index.php"><img src="../img/story-icon.png" alt="Histórias" class="menu_icon">Histórias</a></li>
        <li><a href="../Exemplo_quizz/index.php"><img src="../img/quizz-icon.png" alt="Quizzes" class="menu_icon">Quizzes</a></li>
        <li><a href="../suporte/index.php"><img src="../img/support-icon.png" alt="Suporte" class="menu_icon">Suporte</a></li>
    </ul>
</nav>
<nav class="nav_body">
    <div class="div_body">
        <h1 class="h1_titulo">
            BEM VINDO À DUMKA
        </h1>
        <h2 class="txt">
            <p>
                A Dumka é um espaço dedicado à disseminação de histórias e conhecimento, onde estudantes,
                professores e amantes da arte e história se encontram para explorar conteúdos enriquecedores.
                Nosso objetivo é inspirar mentes curiosas, fomentar a criatividade e criar um ambiente de aprendizado colaborativo.
            </p>
        </h2>
        <div class="button_main">
            <button class="button_historias"><a href="../Exemplo_texto/index.php">Histórias</a></button>
            <button class="button_quizzes"><a href="../Exemplo_quizz/index.php">Quizzes</a></button>
        </div>
    </div>
</nav>
<script src="script.js"></script>
</body>
</html>
