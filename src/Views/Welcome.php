<?php
namespace Root\BankProject\Views;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'queroSerGet') {
    include_once "./src/Views/Account.php";
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="caminho/para/o/seu/estilo.css">
</head>
<body class="welcome">
  <header class="header">
    <div class="logo">
      <h1 class="logo-text">BANKGET</h1>
      <p class="text-body">UM BANCO EM SUA MELHOR VERSÃO</p>
    </div>
    <ul class="menu">
      <a href="#">Home</a>
      <a href="#">Home</a>
      <a href="#">Home</a>
      <a href="#">Home</a>
      <a href="#">Home</a>
      <form method="post">
          <input type="hidden" name="action" value="queroSerGet">
          <input type="submit" class="get" value="Quero ser Get">
      </form>
    </ul>
  </header>
  <?php 
    if (isset($_POST['action']) && $_POST['action'] == 'queroSerGet') {
      include_once "./src/Views/Account.php";
    } else {
      include_once "./src/Views/Welcome.php";
    }
  ?>
</body>
</html>
