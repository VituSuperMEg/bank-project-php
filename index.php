<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bem-vindo</h1>
  <?php
  require_once "./vendor/autoload.php";

  use Root\BankProject\Controllers\Users;

  $users = new Users();
  $result = $users->index();
  var_dump($result);
  ?>
</body>

</html>