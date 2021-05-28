<?php
session_start();
unset(
  $_SESSION['usuarioLogin'],
  $_SESSION['usuarioSenha']
);
session_destroy();
header('Location: index.php');
?>