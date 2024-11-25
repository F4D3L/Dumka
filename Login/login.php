<?php
// Inclui a conexão ao banco de dados
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha)) {
        // Prepara a consulta para verificar o login
        $query = "SELECT l.id_login, l.categoria_login, l.senha_login, p.id_pessoa 
                  FROM tb_login l
                  LEFT JOIN tb_pessoa p ON l.id_login = p.id_login
                  WHERE l.email_login = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifica a senha diretamente
            if ($senha === $user['senha_login']) {
                // Armazena as informações na sessão
                $_SESSION['id_login'] = $user['id_login'];
                $_SESSION['id_pessoa'] = $user['id_pessoa'];
                $_SESSION['categoria_login'] = $user['categoria_login'];

                // Redireciona o usuário com base na categoria
                switch ($user['categoria_login']) {
                    case 'Professor':
                        header("Location: ../perfil_professor/index.php");
                        break;
                    case 'Curadoria':
                        header("Location: ../perfil_curador/index.php");
                        break;
                    default: // Usuário
                        header("Location: ../perfil_usuario/index.php");
                        break;
                }
                exit();
            } else {
                $erro = "Senha inválida.";
            }
        } else {
            $erro = "Usuário não encontrado.";
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}

// Caso exista um erro, exibe na página de login
if (isset($erro)) {
    echo "<script>alert('$erro');</script>";
}
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

            <?php
            // Verifica se o usuário está logado
            if (isset($_SESSION['id_login'])) {
                // Se o usuário estiver logado, não exibe os botões de Login e Registro
                echo '<button class="button_logout"><a href="logout.php">Logout</a></button>';
            } else {
                // Se não estiver logado, exibe os botões de Login e Registro
                echo '<button class="button_login"><a href="../Login/index.php">Login</a></button>';
                echo '<button class="button_registro"><a href="../Registro/index.php">Registro</a></button>';
            }
            ?>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                est laborum
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
