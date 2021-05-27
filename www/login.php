<?
session_start();
$mysqli = new mysqli("db","admin","admin123","dbCadDriver");
$email = trim($_POST['InputEmail']);
$password = trim($_POST['InputPassword']);
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
if ($result = $mysqli -> query("SELECT * FROM tbUsuarios WHERE email = '$email' AND password = '$password'")) {
  if(empty($result -> num_rows)){
    $_SESSION["LoginErro"] = "Usuario ou senha inválido!";
    $result -> free_result();
    header("Location: index.html");
  } elseif(!empty($result -> num_rows)){
    while($row = $result -> fetch_assoc()) {
      $_SESSION['usuarioLogin'] = $row['email'];
      $_SESSION['usuarioSenha'] = $row['password'];
      $_SESSION['usuarioNome'] = $row['nome'];
    };
    $result -> free_result();
    header("Location: home.php");
  } else {
    $_SESSION["LoginErro"] = "Usuario ou senha inválido!";
    $result -> free_result();
    header("Location: index.html");
  }
}
$mysqli -> close();
?>