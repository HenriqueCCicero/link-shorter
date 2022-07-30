<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Your link has been shortened</p>
  <a href="/?t=<?=$_SESSION['token']?>">
  http://localhost:8000/?t=<?=$_SESSION['token']?>  
</a>  
</body>
</html>