<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados
session_start();
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
            <li><a href="index.php"><img src="../img/story-icon.png" alt="Histórias" class="menu_icon">Histórias</a></li>
            <li><a href="../Exemplo_quizz/index.php"><img src="../img/quizz-icon.png" alt="Quizzes" class="menu_icon">Quizzes</a></li>
            <li><a href="../suporte/index.php"><img src="../img/support-icon.png" alt="Suporte" class="menu_icon">Suporte</a></li>
        </ul>
    </nav>
    <nav class="nav_body">
        <div class="div_body">
            <h1 class="h1_titulo">
                Título
            </h1>
            <img class="img_txt" src="../img/txt_img.png" alt="">
            <h2 class="txt">
                <p>
                    A Mesopotâmia, localizada entre os rios Tigre e Eufrates, é conhecida como o "berço da civilização".
                    Foi nessa região que surgiram algumas das primeiras cidades do mundo, como Ur, Uruk e Babilônia.
                    Os mesopotâmicos desenvolveram a escrita cuneiforme, usada para registrar comércio, leis e histórias.
                    Entre suas contribuições notáveis estão o Código de Hamurabi, um dos primeiros conjuntos de leis da humanidade,
                    e avanços na agricultura, como sistemas de irrigação. Essa rica civilização deixou um legado que moldou
                    profundamente a história do mundo.  <br> <br>
                    Professor: Guilherme Celli
                </p>  
            </h2>
            <div class="button_main">
                <button class="button_quizzes"><a href="../Exemplo_quizz/index.php">Quizzes</a></button>
            </div>
        </div>
    </nav>
    <script src="script.js">
    </script>
</body>
</html>
