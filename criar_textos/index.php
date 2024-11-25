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
            <li><a href="../suporte/index.php"><img src="../img/support-icon.png" alt="Suporte" class="menu_icon">Suporte</a></li>
        </ul>
    </nav>
    <nav class="nav_body">
        <div class="div_body">
            <h1 class="h1_titulo">
                Criação de textos
            </h1>
            <form class="form_login" action="criar_textos.php" method="POST" enctype="multipart/form-data">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Digite o título do texto" required>

                <label for="hist_texto">História:</label>
                <textarea id="hist_texto" name="hist_texto" rows="5" cols="30" placeholder="Digite o texto completo" required></textarea>

                <label for="alt_text">Texto Alternativo para a Imagem:</label>
                <textarea id="alt_text" name="alt_text" rows="2" cols="30" placeholder="Descreva a imagem para acessibilidade" required></textarea>

                <label for="image">Selecione uma imagem:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <label for="faixa_etaria">Faixa Etária:</label>
                <select id="faixa_etaria" name="faixa_etaria" required>
                    <option value="">Escolha uma faixa etária</option>
                    <option value="18+">18+</option>
                    <option value="13-17">13-17</option>
                    <option value="10-13">10-13</option>
                </select>

                <div class="button_main">
                    <button class="button_registro2" type="submit">Enviar</button>
                </div>
            </form>

            <br>
            <br>
        </div>
    </nav>
    <script src="script.js">
    </script>
</body>
</html>
