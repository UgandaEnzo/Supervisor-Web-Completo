<?php
    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET ['id'];
        $query = "DELETE FROM componentes WHERE id = $id";
        $resul_delete = mysqli_query($conn, $query);

        if(!$resul_delete){
            die("Fallo de coneccion con la base de datos");
        }

        $_SESSION['message'] = 'Componente eliminado';
        $_SESSION['message_type'] = 'danger';

        header("Location: index.php");
    }

?>