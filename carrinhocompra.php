<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Verificar se o ID do produto foi fornecido na URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $userId = $_SESSION['user_id'];

    // Configuração da conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eccomerce";

    // Criar conexão com o banco de dados
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar a conexão com o banco de dados
    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Verificar se o usuário já possui um carrinho de compras
    $checkCartSql = "SELECT * FROM carrinho_compras WHERE id_usuario = $userId";
    $checkCartResult = mysqli_query($conn, $checkCartSql);

    if (mysqli_num_rows($checkCartResult) > 0) {
        // O usuário já possui um carrinho de compras, obter o ID do carrinho
        $cartRow = mysqli_fetch_assoc($checkCartResult);
        $cartId = $cartRow['id_carrinho'];
    } else {
        // O usuário não possui um carrinho de compras, criar um novo carrinho
        $createCartSql = "INSERT INTO carrinho_compras (id_usuario, total_carrinho) VALUES ($userId, 0)";
        mysqli_query($conn, $createCartSql);
        $cartId = mysqli_insert_id($conn);
    }

    // Verificar se o produto já está no carrinho
    $checkItemSql = "SELECT * FROM itens_carrinho WHERE id_carrinho = $cartId AND id_produto = $productId";
    $checkItemResult = mysqli_query($conn, $checkItemSql);

    if (mysqli_num_rows($checkItemResult) > 0) {
        // O produto já está no carrinho, atualizar a quantidade e o preço unitário
        $updateItemSql = "UPDATE itens_carrinho SET quantidade_produto = quantidade_produto + 1, preco_unitario_produto = (SELECT preco_produto FROM produtos WHERE id_produto = $productId) WHERE id_carrinho = $cartId AND id_produto = $productId";
        mysqli_query($conn, $updateItemSql);
    } else {
        // O produto ainda não está no carrinho, adicionar o produto com a quantidade e o preço unitário
        $insertItemSql = "INSERT INTO itens_carrinho (id_carrinho, id_produto, quantidade_produto, preco_unitario_produto) VALUES ($cartId, $productId, 1, (SELECT preco_produto FROM produtos WHERE id_produto = $productId))";
        mysqli_query($conn, $insertItemSql);
    }

    // Calcular o valor total dos itens no carrinho
    $totalQuery = "SELECT SUM(quantidade_produto * preco_unitario_produto) AS total FROM itens_carrinho WHERE id_carrinho = $cartId";
    $totalResult = mysqli_query($conn, $totalQuery);
    $totalRow = mysqli_fetch_assoc($totalResult);
    $totalCarrinho = $totalRow['total'];

    // Atualizar o valor total do carrinho
    $updateCartSql = "UPDATE carrinho_compras SET total_carrinho = $totalCarrinho WHERE id_carrinho = $cartId";
    mysqli_query($conn, $updateCartSql);

    // Redirecionar de volta para a página de produtos
    header("Location: carrinho.php");
    exit();
} else {
    // ID do produto não fornecido na URL
    echo "ID do produto não fornecido.";
}
?>