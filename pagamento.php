<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user_email'])) {
  header('Location: conta.php');
  exit();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nexgen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geologica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>

    
   
  
  <div class = "main-wrapper">
      <nav class = "navbar">
        <div class = "brand-and-icon">
          <a href = "index.html" class = "navbar-brand">Nexgen</a>
          <button type = "button" class = "navbar-toggler">
            <i class = "fas fa-bars"></i>
          </button>
        </div>

        <div class = "navbar-collapse">
          <ul class = "navbar-nav">
            <li>
              <a href = "#">início</a>
            </li>

            <li>
              <a href = "#" class = "menu-link">
                celulares
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Explorar Iphone</h4>
                  <ul>
                    <li><a href = "contrucao.html">iphone xr</a></li>
                    <li><a href = "contrucao.html">iphone 11</a></li>
                    <li><a href = "contrucao.html">iphone 12</a></li>
                    <li><a href = "contrucao.html">iphone 13</a></li>
                    <li><a href = "produto1.php">iphone 14</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Explorar Samsung</h4>
                  <ul>
                    <li><a href = "contrucao.html">Galaxy s21 fe</a></li>
                    <li><a href = "contrucao.html">Galaxy s21</a></li>
                    <li><a href = "contrucao.html">Galaxy s22</a></li>
                    <li><a href = "contrucao.html">Galaxy s23</a></li>
                    <li><a href = "produto6.php">Galaxy s23 ultra</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h2>todos os melhores dispostivos para você</h2>
                  <a href="catalogo.html"><button type = "button" class = "btn">compre agora</button></a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <img src = "images/imgcel.jpg" alt = "product image">
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href = "#" class = "menu-link">
                notebooks
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>explorar mac</h4>
                  <ul>
                    <li><a href = "produto2.php">macbook air m1</a></li>
                    <li><a href = "contrucao.html">macbook air m2</a></li>
                    <li><a href = "contrucao.html">macbook pro chip m2</a></li>
                    <li><a href = "contrucao.html">macbook pro chip m2 pro</a></li>
                    <li><a href = "contrucao.html">macbook pro chip m2 max</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>explorar dell</h4>
                  <ul>
                    <li><a href = "contrucao.html">Notebook Vostro 3510</a></li>
                    <li><a href = "contrucao.html">Notebook Inspiron 15 3000</a></li>
                    <li><a href = "contrucao.html">Notebook Inspiron 15</a></li>
                    <li><a href = "contrucao.html">Notebook Gamer G15 com Processador AMD Ryzen</a></li>
                    <li><a href = "produto3.php">Notebook gamer Alienware m16</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h2>todos os melhores dispostivos para você</h2>
                  <a href="catalogo.html"><button type = "button" class = "btn">compre agora</button></a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <img src = "images/imgnote.jpg" alt = "product image">
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href = "#" class = "menu-link">
               relógios
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>explorar apple watch</h4>
                  <ul>
                    <li><a href = "contrucao.html">Apple Watch SE</a></li>
                    <li><a href = "contrucao.html">Apple Watch Series 7</a></li>
                    <li><a href = "contrucao.html">Apple Watch Series 8</a></li>
                    <li><a href = "contrucao.html">Apple Watch Nike</a></li>
                    <li><a href = "produto4.php">Apple Watch Ultra</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>explorar smartwatch</h4>
                  <ul>
                    <li><a href = "contrucao.html">Galaxy Watch5 Pro Bluetooth (45mm)</a></li>
                    <li><a href = "contrucao.html">Galaxy Watch5 LTE (40mm)</a></li>
                    <li><a href = "contrucao.html">Galaxy Watch5 Bluetooth (44mm)</a></li>
                    <li><a href = "contrucao.html">Galaxy Watch4 BT 40mm</a></li>
                    <li><a href = "produto5.php">Galaxy Watch4 Classic BT 46mm - Preto</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h2>todos os melhores dispostivos para você</h2>
                  <a href="catalogo.html"><button type = "button" class = "btn">compre agora</button></a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <img src = "images/imgre.jpg" alt = "product image">
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href = "#" class = "menu-link">
                tablets
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>ipad</h4>
                  <ul>
                    <li><a href = "contrucao.html">iPad mini</a></li>
                    <li><a href = "contrucao.html">iPad 9ª geração</a></li>
                    <li><a href = "contrucao.html">iPad 10ª geração</a></li>
                    <li><a href = "contrucao.html">iPad Air</a></li>
                    <li><a href = "produto7.php">iPad Pro</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Galaxy Tab</h4>
                  <ul>
                    <li><a href = "contrucao.html">Galaxy Tab S6 Lite</a></li>
                    <li><a href = "contrucao.html">Galaxy Tab S7 FE LTE</a></li>
                    <li><a href = "contrucao.html">Galaxy Tab S8 5G</a></li>
                    <li><a href = "contrucao.html">Galaxy Tab S8+ 5G</a></li>
                    <li><a href = "produto8.php">Galaxy Tab S8 Ultra 5G</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h2>todos os melhores dispostivos para você</h2>
                  <a href="catalogo.html"><button type = "button" class = "btn">compre agora</button></a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <img src = "images/imgtab.jpg" alt = "product image">
                </div>
                <!-- end of item -->
              </div>
            </li>
            <li>
              <a href = "#" class = "menu-link">
                conta
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <div class = "sub-menu-item">
                  <h4>Usuário</h4>
                  <ul>
                    <li><a href = "conta.php">Sua conta</a></li>
                    <li><a href = "pedidos.php">Pedidos</a></li>
                    <li><a href = "carrinho.php">Carrinho de compras</a></li>
                    <li><a href = "contrucao.html">Ajuda</a></li>
                  </ul>
                </div>
                <div class = "sub-menu-item">
                  <h4>Suporte</h4>
                  <ul>
                    <li><a href = "suporte.html">Assistência técnica</a></li>
                    <li><a href = "duvidas.html">Dúvidas</a></li>
                    <li><a href = "contrucao.html">Solicitações</a></li>
                    <li><a href = "contrucao.html">Processos</a></li>
                    <li><a href = "contrucao.html">Rastreamento</a></li>
                  </ul>
                </div>
                <div class = "sub-menu-item">
                  <h2>todos os melhores dispostivos para você</h2>
                  <a href="catalogo.html"><button type = "button" class = "btn">compre agora</button></a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <img src = "images/carrinho-de-compras.png" alt = "product image">
                </div>
                 </div>
              </li>
          </ul>
        </div>
      </nav>
    </div>

    
   
    <?php
// Verificar se o usuário está logado
if (isset($_SESSION['user_id'])) {
    // Verificar se o ID do produto está presente na URL
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

        // Consulta SQL para obter as informações do produto com base no ID
        $sql = "SELECT * FROM produtos WHERE id_produto = $productId";
        $result = mysqli_query($conn, $sql);

        // Verificar se a consulta retornou resultados
        if (mysqli_num_rows($result) > 0) {
            // Recupere as informações do produto
            $row = mysqli_fetch_assoc($result);
            $nome = $row['nome_produto'];
            $descricao = $row['descricao_produto'];
            $preco = $row['preco_produto'];
            $imagem = $row['url_imagem']; // URL da imagem do produto
            // Exiba as informações do produto
            echo "<div class='container6'>";
            echo "<div class='product-image2'>";
            echo "<img src='$imagem' alt='Imagem do Produto'>";
            echo "</div>";
            echo "<h2>Informações do Produto</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Descrição:</strong> $descricao</p>";
            echo "<p><strong>Preço:</strong> R$ $preco</p>";

            // Verificar se o formulário de pagamento foi enviado
            if (isset($_POST['id_produto'])) {
                // Obter o ID do produto a partir do formulário
                $productId = $_POST['id_produto'];

                // Inserir o pedido do usuário na tabela pedidos_usuario
                $insertSql = "INSERT INTO pedidos_usuario (id_usuario, id_produto) VALUES ($userId, $productId)";
                if (mysqli_query($conn, $insertSql)) {
                    // Pedido realizado com sucesso
                    echo "<div class='success-message'>";
                    echo "Pedido realizado com sucesso!";
                    echo "</div>";
                    echo "<a class='view-orders-button' href='pedidos.php'>Ver Meus Pedidos</a>";
                    
                } else {
                    echo "Erro ao realizar o pedido: " . mysqli_error($conn);
                }
            } else {
                // Exibir o formulário de pagamento
                echo "<form id='payment-form' action='pagamento.php?id=$productId' method='POST'>";
                echo "<input type='hidden' name='id_produto' value='$productId'>";
                echo "<h1>Formulário de Pagamento</h1>";
                echo '<div class="form-group">';
echo '    <label for="payment-method">Método de Pagamento:</label>';
echo '    <select id="payment-method" name="payment-method" onchange="handlePaymentMethodChange()">';
echo '        <option value="">Selecione</option>';
echo '        <option value="cartao">Cartão de Crédito</option>';
echo '        <option value="boleto">Boleto Bancário</option>';
echo '        <option value="pix">PIX</option>';
echo '    </select>';
echo '</div>';

echo '<div id="card-fields" class="hidden">';
echo '    <h2>Informações do Cartão</h2>';
echo '    <div class="form-group">';
echo '        <label for="card-number">Número do Cartão:</label>';
echo '        <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">';
echo '    </div>';
echo '    <div class="form-group">';
echo '        <label for="card-holder">Nome do Titular:</label>';
echo '        <input type="text" id="card-holder" name="card-holder" placeholder="Nome Completo">';
echo '    </div>';
echo '    <div class="form-group">';
echo '        <label for="expiry-date">Data de Validade:</label>';
echo '        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/AA">';
echo '    </div>';
echo '    <div class="form-group">';
echo '        <label for="cvv">CVV:</label>';
echo '        <input type="text" id="cvv" name="cvv" placeholder="123">';
echo '    </div>';
echo '</div>';

echo '<div id="boleto-fields" class="hidden">';
echo '    <h2>Boleto Bancário</h2>';
echo '    <div class="form-group">';
echo '        <label for="boleto-code">Código do Boleto:</label>';
echo '        <input type="text" id="boleto-code" name="boleto-code" readonly>';
echo '    </div>';
echo '    <div class="qr-code">';
echo '        <img src="images/QR-Code-PNG-Pic-Clip-Art-Background.png" alt="QR Code">';
echo '    </div>';
echo '</div>';

echo '<div id="pix-fields" class="hidden">';
echo '    <h2>PIX</h2>';
echo '    <div class="qr-code">';
echo '        <img src="images/QR-Code-PNG-Pic-Clip-Art-Background.png" alt="QR Code">';
echo '    </div>';
echo '    <div class="form-group">';
echo '        <label for="pix-code">Código PIX:</label>';
echo '        <input type="text" id="pix-code" name="pix-code" readonly>';
echo '    </div>';
echo '</div>';

                echo "<h2>Informações de Endereço</h2>";
                echo "<div class='form-group'>";
                echo "<label for='address'>Endereço:</label>";
                echo "<input type='text' id='address' name='address' placeholder='Rua, número, complemento'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='city'>Cidade:</label>";
                echo "<input type='text' id='city' name='city' placeholder='Cidade'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='state'>Estado:</label>";
                echo "<input type='text' id='state' name='state' placeholder='Estado'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='zipcode'>CEP:</label>";
                echo "<input type='text' id='zipcode' name='zipcode' placeholder='CEP'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<input type='submit' name='payment-method' value='Pagar'>";
                echo "</div>";
                echo "</form>";
            }

            echo "</div>";
        } else {
            // Produto não encontrado no banco de dados
            echo "Produto não encontrado.";
        }

        // Fechar a conexão com o banco de dados
        mysqli_close($conn);
    } else {
        // ID do produto não fornecido na URL
        echo "ID do produto não fornecido.";
    }
} else {
    // Usuário não autenticado
    echo "Usuário não autenticado.";
}
?>

     

    <div class="footer-basic">
      <footer>
          <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Início</a></li>
            <li class="list-inline-item"><a href="servico.html">Serviços</a></li>
            <li class="list-inline-item"><a href="sobre.html">Sobre</a></li>
            <li class="list-inline-item"><a href="termos.html">Termos e condições</a></li>
            <li class="list-inline-item"><a href="privacidade.html">Política de Privacidade</a></li>
          </ul>
          <p class="copyright">Nexgen © 2023</p>
      </footer>
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  
  </body>
</html>
