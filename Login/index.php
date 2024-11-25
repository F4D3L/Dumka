<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumka - Login</title>
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
        <img class="img" src=" ../img/logo.PNG" alt="logo">
    </div>
    <div class="button_div_menu">
        <ul class="nav_buttons">
            <button class="button_change" onclick="toggleTheme()">Modo contraste</button>
            <button class="button_login"><a href="../Login/index.php">Login</a></button>
            <button class="button_registro"><a href="../Registro/index.php">Registro</a></button>
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
            Entre na sua conta
        </h1>
        <form class="form_login" action="login.php" method="POST">
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Insira seu email" required> <br>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" placeholder="Insira sua senha">
            <div class="button_main">
                <button type="submit" class="button_login2">Login</button> <!-- Tem que ser redirecionado para a página inicial logada-->
                <button class="button_registro2"><a href="../Registro/index.php">Registro</a></button>
            </div>
        </form>
        <a class="no_acc" href="../Registro/index.php">Não possui uma conta? Clique no botão registro </a>
    </div>
</nav>
<script src="script.js"></script>
</body>
</html>
