<?php
include_once "connection.php";

$query = "SELECT * FROM tbUsuarios ORDER BY idUsuario ASC";
$result = mysqli_query($conn, $query);

if(($result) AND ($result->num_rows != 0)){
  print "<table class=\"table table-striped table-bordered table-hover table-sm\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Nome</th>
        <th scope=\"col\">Login</th>
        <th scope=\"col\">Cluster</th>
        <th scope=\"col\">Privilégio</th>
      </tr>
    </thead>
    <tbody>";
    while($rows = mysqli_fetch_assoc($result)){
      print "<tr>
        <th scope=\"row\">".$rows['idUsuario']."</th>
        <td>".$rows['cmpNome']."</td>
        <td>".$rows['cmpLogin']."</td>
        <td>".$rows['cmpCluster']."</td>
        <td>".$rows['cmpPrivilegio']."</td>
      </tr>";
    }
} else {
  print "<div class=\"alert alert-danger\" role=\"alert\">Nenhum resultado encontrado!</div>";
}
?>
  </tbody>
</table>
