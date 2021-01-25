<?php
    include ('Menu/CRUD/db.php');

    if (isset($_POST['Login'])){
        $NombreUse=$_POST['NombreUse'];
        $Contraseña=$_POST['Contraseña'];

        $_SESSION['NombreUse']=$NombreUse;

        $consulta="SELECT*FROM register where NombreUse='$NombreUse' and Contraseña='$Contraseña'";
        $resultado=mysqli_query($conn,$consulta);

        $filas=mysqli_num_rows($resultado);

        if($filas){
            header("location:Menu/CRUD/Menu.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include('assets/css/header.html') ?>
    <h1>Login</h1>
    <span>Or<a href="Register.php">Register</a></span>
    <div class="container p-4">
        <div class="row">
            <div class="col-mb-4">
                <div class="card card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="NombreUse" class="form-control"
                                placeholder="Ingrese su nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" name="Contraseña" class="form-control mt-2"
                                placeholder="Ingrese su Contraseña">
                        </div>
                        <input type="submit" class="btn btn-success btn-block mt-3" 
                            name="Login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        

</body>
</html>