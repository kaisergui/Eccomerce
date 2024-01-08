<?php
// Verifique se o usuário está logado
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user_id'])) {
  header('Location: conta.php');
  exit();
}
?>

