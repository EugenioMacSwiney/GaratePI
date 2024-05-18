<?php
include('/app/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Form</title>
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-dark table-striped">
            <tbody>
                <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM usuarios where ID='" . $id . "'";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    <form action="/procesar_editar.php" method="POST">
                        <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="txtID">
                        <p>Nombre</p>
                        <input type="text" value="<?php echo $mostrar['Nombre'] ?>" name="txtNombre" class="form-control">
                        <p>Usuario</p>
                        <input type="text" value="<?php echo $mostrar['Usuario'] ?>" name="txtUsuario" class="form-control">
                        <p>Contrasena</p>
                        <input type="text" value="<?php echo $mostrar['Contrasena'] ?>" name="txtContrasena" class="form-control">
                        <input type="submit" value="ACTUALIZAR" class="btn btn-primary">
                    </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>