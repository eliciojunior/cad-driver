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
  <link href="style.css" rel="stylesheet">
  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- Page Content -->
<div class="container">
	<div class="row">
    <form class="form-login" action="login.php" method="post">
	    <h2 class="text-white">CadDriver</h2>
        <div class="form-group">
          <label for="InputEmail" class="text-white">Email</label>
          <input type="email" class="form-control input-sm text-white" id="InputEmail" name="InputEmail" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="InputPassword" class="text-white">Password</label>
          <input type="password" class="form-control input-sm text-white" id="InputPassword" name="InputPassword" placeholder="" required>
        </div>
        <span class="group-btn">
          <button type="submit" class="btn btn-success btn-md">Entrar <i class="fa fa-sign-in"></i></button>
        </span>
    </form>
    <?php
      $erro = $_GET['error'];
      if($erro == "true"){
      ?>
      <div class="alert alert-danger" role="alert">
      <strong>Ops!</strong> Usuário ou senha inválidos, tente novamente.
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
      </div>
      <? } ?>
  </div>
</div>
<!--footer-->
<div class="footer text-white">
  <p>© 2021 CadDriver - Cadastro de Motoristas | Developed by <a href="https://github.com/eliciojunior">Elicio Junior</a></p>
</div>
<!--//footer-->
</div>
</body>
</html>
