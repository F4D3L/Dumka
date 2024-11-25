<?php
require_once 'C:\xampp\htdocs\Dumka\Site-dumka\db_connection.php'; // Inclui a conexão ao banco de dados
require_once 'C:\xampp\htdocs\Dumka\Site-dumka\auth_check.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se o usuário está logado e é um professor
//    if (!isset($_SESSION['id_login']) || $_SESSION['role'] !== 'professor') {
//        die("Você precisa estar logado como professor para criar um texto.");
//    }

    // Recebendo dados do formulário
    $titulo = trim(filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING));
    $hist_texto = trim(filter_input(INPUT_POST, 'hist_texto', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $alt_text = trim(filter_input(INPUT_POST, 'alt_text', FILTER_SANITIZE_STRING));
    $faixa_etaria = trim(filter_input(INPUT_POST, 'faixa_etaria', FILTER_SANITIZE_STRING));
    $id_professor = $_SESSION['id_login']; // Obtém o ID do professor da sessão

    // Verifica se uma imagem foi enviada
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Configurações para upload
        $uploadDir = 'C:\xampp\htdocs\Dumka\Site-dumka\img/';
        $fileName = basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $fileName;

        // Move o arquivo para o diretório desejado
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $url_img = $fileName; // Nome da imagem salva no banco

            // Insere os dados no banco
            $query = "INSERT INTO tb_texto (titulo_texto, hist_texto, alt_text, url_img, faixa_etaria, sit_texto, id_professor) 
                      VALUES (?, ?, ?, ?, ?, 'Em análise', ?)";
            $stmt = $con->prepare($query);

            // Confere se o prepared statement foi criado corretamente
            if (!$stmt) {
                die("Erro ao preparar a consulta: " . $con->error);
            }

            // Vincula os parâmetros
            $stmt->bind_param("sssssi", $titulo, $hist_texto, $alt_text, $url_img, $faixa_etaria, $id_professor);

            // Executa a consulta
            if ($stmt->execute()) {
                header("Location: ../Solicitacao_enviada/index.php");
                exit();
            } else {
                die("Erro ao salvar os dados no banco de dados: " . $stmt->error);
            }
        } else {
            die("Erro ao fazer o upload da imagem.");
        }
    } else {
        die("Imagem não enviada ou com erro.");
    }
} else {
    die("Método de requisição inválido.");
}
?>
