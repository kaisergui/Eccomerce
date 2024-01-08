<?php
// Verificar se o formulário de registro foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register-name']) && isset($_POST['register-email']) && isset($_POST['register-password'])) {
    $name = $_POST['register-name'];
    $email = $_POST['register-email'];
    $password = $_POST['register-password'];

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

    // Consulta SQL para inserir o novo usuário
    $sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Registro bem-sucedido
        // Você pode adicionar aqui o código para lidar com ações adicionais após o registro
        header('Location: conta.php');
        exit();
    } else {
        // Falha no registro
        $errorMessage = 'Falha no registro. Por favor, tente novamente.';
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}
?>