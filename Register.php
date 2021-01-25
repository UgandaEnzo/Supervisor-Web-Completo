<?php
    include ('Menu/CRUD/db.php');

    if (isset($_POST['Register'])){
        $NombreUse = $_POST['NombreUse'];
        $Contraseña = $_POST['Contraseña'];
        

        $query = "INSERT INTO register(NombreUse, Contraseña) VALUES ('$NombreUse', '$Contraseña')";
        $resultado = mysqli_query($conn, $query);
        if(!$resultado){
         die("Query Faild");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('assets/css/header.html') ?>
    <h1>Register</h1>
    <span>Or<a href="Login.php">Login</a></span>
    <div class="container p-4">
        <div class="row">
            <div class="col-mb-4">
                <div class="card card-body">
                    <form action="Register.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="NombreUse" class="form-control"
                                placeholder="Ingrese su nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" name="Contraseña" class="form-control mt-2"
                                placeholder="Ingrese su Contraseña">
                        </div>
                        <div class="form-group">
                            <input type="password" name="CVV" class="form-control mt-2"
                                placeholder="Ingrese el codigo de verificacion">
                        </div>
                        <input type="submit" class="btn btn-success btn-block mt-3" 
                            name="Register" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>