<?php
session_start();

// Verificar se o usuário está logado
if (isset($_SESSION['user_id'])) {
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

    // Obter o carrinho de compras do usuário
    $cartQuery = "SELECT * FROM carrinho_compras WHERE id_usuario = $userId";
    $cartResult = mysqli_query($conn, $cartQuery);

    if (mysqli_num_rows($cartResult) > 0) {
        $cartRow = mysqli_fetch_assoc($cartResult);
        $cartId = $cartRow['id_carrinho'];

        // Obter os itens do carrinho de compras
        $itemsQuery = "SELECT ic.id_item, ic.id_produto, ic.quantidade_produto FROM itens_carrinho ic WHERE ic.id_carrinho = $cartId";
        $itemsResult = mysqli_query($conn, $itemsQuery);

        // Verificar se existem itens no carrinho
        if (mysqli_num_rows($itemsResult) > 0) {
            echo "<div class='container9'>";
            echo "<h1>Itens do Carrinho</h1>";

            while ($itemRow = mysqli_fetch_assoc($itemsResult)) {
                $itemId = $itemRow['id_item'];
                $productId = $itemRow['id_produto'];
                $quantity = $itemRow['quantidade_produto'];

                // Salvar o item do carrinho como pedido na tabela "pedidos_usuario"
                for ($i = 0; $i < $quantity; $i++) {
                    $insertOrderSql = "INSERT INTO pedidos_usuario (id_usuario, id_produto) VALUES ($userId, $productId)";
                    mysqli_query($conn, $insertOrderSql);
                }

                // Recuperar informações do produto para exibição
                $productQuery = "SELECT nome_produto, descricao_produto FROM produtos WHERE id_produto = $productId";
                $productResult = mysqli_query($conn, $productQuery);
                $productRow = mysqli_fetch_assoc($productResult);
                $productName = $productRow['nome_produto'];
                $productDescription = $productRow['descricao_produto'];

                echo "<div class='cart-item'>";
                echo "<div class='item-details'>";
                echo "<h3 class='item-title'>$productName</h3>";
                echo "<p class='item-description'>$productDescription</p>";
                echo "</div>";
                echo "</div>";
            }

            // Limpar o carrinho de compras do usuário
            $clearCartSql = "DELETE FROM itens_carrinho WHERE id_carrinho = $cartId";
            mysqli_query($conn, $clearCartSql);

            // Redirecionar para a página de pedidos
            header("Location: pedidos.php");
            exit();
        } else {
            echo "<p>Nenhum item encontrado no carrinho.</p>";
        }
    } else {
        echo "<p>Nenhum carrinho de compras encontrado.</p>";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
} else {
    echo "Usuário não autenticado.";
}
?>