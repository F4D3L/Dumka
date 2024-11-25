<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka/db_connection.php'; // Inclui a conexão ao banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['txt_reg'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $role = $_POST['role'];

    // Valida se os campos não estão vazios
    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($role)) {
        // Verifica se o email já está cadastrado
        $query = "SELECT id_login FROM tb_login WHERE email_login = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email já existe
            echo "<script>alert('Este email já está registrado.');</script>";
        } else {
            // Insere o login do novo usuário
            $query = "INSERT INTO tb_login (email_login, senha_login, categoria_login) VALUES (?, ?, ?)";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sss", $email, $senha, $role);
            $stmt->execute();

            // Recupera o ID do login inserido
            $id_login = $stmt->insert_id;

            // Insere as informações da pessoa
            $query = "INSERT INTO tb_pessoa (nome_pessoa, id_login) VALUES (?, ?)";
            $stmt = $con->prepare($query);
            $stmt->bind_param("si", $nome, $id_login);
            $stmt->execute();

            // Redireciona para a página de solicitação enviada (pode ser ajustado conforme necessário)
            header("Location: ../Solicitacao_enviada/index.php");
            exit();
        }
    } else {
        echo "<script>alert('Preencha todos os campos.');</script>";
    }
}
?>

