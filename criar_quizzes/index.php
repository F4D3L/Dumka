<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados
require_once 'C:\xampp\htdocs\Dumka\Site-dumka\auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Quizzes</title>
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
    </nav>

    <nav class="nav_body">
        <div class="div_body">
            <h1 class="h1_titulo">Criar quizzes</h1>
            <textarea class="textarea_pergunta" placeholder="Escreva sua pergunta aqui..."></textarea>

            <form class="form_quizz">
                <!-- Alternativas -->
                <div class="opcao">
                    <input type="radio" name="alternativa" id="alt1">
                    <input type="text" class="input_alternativa" placeholder="Inserir alternativa">
                </div>
                <div class="opcao">
                    <input type="radio" name="alternativa" id="alt2">
                    <input type="text" class="input_alternativa" placeholder="Inserir alternativa">
                </div>
                <div class="opcao">
                    <input type="radio" name="alternativa" id="alt3">
                    <input type="text" class="input_alternativa" placeholder="Inserir alternativa">
                </div>
                <div class="opcao">
                    <input type="radio" name="alternativa" id="alt4">
                    <input type="text" class="input_alternativa" placeholder="Inserir alternativa">
                </div>
            </form>

            <div class="button_main">
                <button class="button_registro2" type="submit">Enviar</button>
            </div>
        </div>
    </nav>
    <script src="script.js"></script>
</body>
</html>
