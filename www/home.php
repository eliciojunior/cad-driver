<?php
session_start();
if (isset($_SESSION['usuarioLogin']) && isset($_SESSION['usuarioSenha'])){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>CadDriver | Cadastro de Motoristas</title>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <h1>Home</h1>
  <p> This is a home page</p>
  <p>Welcome <? print $_SESSION['usuarioNome']; ?></p>
  <a href="logout.php"><button type="button" class="btn btn-danger btn-md">Sair <i class="fa fa-sign-out"></i></button></a>
</body>
</html>
<?
} else {
  header('Location: index.html');
}
?>
