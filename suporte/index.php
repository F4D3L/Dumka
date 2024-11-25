<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados
require_once 'C:\xampp\htdocs\Dumka\Site-dumka\auth_check.php';
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
                    <button class="button_login"><a href="../Login/index.php">Login</a></button>
                    <button class="button_registro"><a href="../Registro/index.php">Registro</a></button>
                </ul>
            </div>
 

        <ul id="menuList">
            <li><a href="../pagina_inicial/index.php"><img src="../img/home-icon.png" alt="Página Inicial" class="menu_icon">Página Inicial</a></li>
            <li><a href="../Exemplo_texto/index.php"><img src="../img/story-icon.png" alt="Histórias" class="menu_icon">Histórias</a></li>
            <li><a href="../Exemplo_quizz/index.php"><img src="../img/quizz-icon.png" alt="Quizzes" class="menu_icon">Quizzes</a></li>
            <li><a href="index.php"><img src="../img/support-icon.png" alt="Suporte" class="menu_icon">Suporte</a></li>
        </ul>
    </nav>
    <nav class="nav_body">
        <div class="div_body">
            <h1 class="h1_titulo">
                Solicitar suporte
            </h1>
            <form class="form_login">
                <label for="text"></label>
                <input type="text" name="txt_reg" id="txt_reg" placeholder="Insira seu nome completo"> 
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Insira seu email"> <br>
                <label for="senha"></label>
                <input type="tel" name="tel" id="tel" placeholder="Insira seu telefone">  <br>
                <textarea name="coment" rows="2" cols="15" id="" maxlength="10px"></textarea>
            </form>
            <div class="button_main">
                <button class="button_registro2" type="submit"><a href="../Solicitacao_enviada/index.php">Solicitar suporte</a></button>
            </div>
        </div>
    </nav>
    <script src="script.js">
    </script>
</body>
</html>
