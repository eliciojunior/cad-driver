<?php
session_start();
include_once "connection.php";
if((isset($_POST["username"])) && (isset($_POST["password"]))){
  $username = mysqli_real_escape_string($conn, trim($_POST["username"]));
  $password = mysqli_real_escape_string($conn, trim($_POST["password"]));
  $query = "SELECT * FROM tbUsuarios WHERE cmpLogin = '$username' AND cmpSenha = '$password'";
  $result = mysqli_query($conn, $query);
  $rows = mysqli_fetch_assoc($result);
  if(empty($rows)){
    $_SESSION["LoginErro"] = "Usuario ou senha inválido!";
    header("Location: index.html");
  } elseif(!empty($rows)) {
    $_SESSION["usuarioLogin"] = $rows["cmpLogin"];
    $_SESSION["usuarioSenha"] = $rows["cmpSenha"];
    $_SESSION["usuarioNome"] = $rows["cmpNome"];
    header("Location: dashboard.php");
  } else {
    $_SESSION["LoginErro"] = "Usuario ou senha inválido!";
    header("Location: index.html");
  }
} else {
  $_SESSION["LoginErro"] = "Usuario ou senha inválido!";
  header("Location: index.html");
}
?>
