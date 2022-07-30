<?php require 'verify-token.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encurtador de Link</title>
</head>
<body>
  <form action="create-link.php" method="post">
    <input type="text" name="link" placeholder="Cole seu link aqui...">
    <button>Gerar</button>
  </form>
</body>
</html>