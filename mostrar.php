<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contrasena</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexion,$sql);
while($mostrar  = mysqli_fetch_array($result)){

?>

    <tr>
    <td><?php echo $mostrar['id'] ?> </td>
    <td><?php echo $mostrar['Nombre'] ?> </td>
    <td><?php echo $mostrar['Usuario'] ?> </td>
    <td><?php echo $mostrar['Contrasena'] ?> </td>    
    <td>

<!editar>
<a href="/editar.php?id=<?php echo $mostrar['id'] ?>">Editar</a>

<!eliminar>
    <form action="/eliminar.php" method="post">
    <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="txtID"readonly>
        <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
    </form>
</td>
    </tr>
<?php
}
?>
</tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
