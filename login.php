<?php
session_start();

// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login-email']) && isset($_POST['login-password'])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    // Configuração da conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "eccomerce";

    // Criar conexão com o banco de dados
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

    // Verificar a conexão com o banco de dados
    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$password'";
    $result = mysqli_query($conn, $sql);

    // Verificar se o login é válido
    if (mysqli_num_rows($result) > 0) {
        // Autenticação bem-sucedida
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id_usuario'];
        $_SESSION['user_email'] = $row['email_usuario'];
        $_SESSION['user_name'] = $row['nome_usuario'];

        // Redirecionar para a página principal ou para onde desejar
        header('Location: dashboard.php');
        exit();
    } else {
        // Credenciais inválidas
        $errorMessage = 'Usuário ou senha incorretos.';
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}
?>