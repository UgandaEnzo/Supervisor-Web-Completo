<?php
    include ("db.php");

    if(isset($_GET['id'])){
        $id = $_GET ['id'];
        $query = "SELECT * FROM componentes WHERE id = $id";
        $resul_edite = mysqli_query($conn, $query);
        if(mysqli_num_rows($resul_edite) == 1) {
            $row = mysqli_fetch_array($resul_edite);
            $Nombre = $row ['Nombre'] ;
            $Cantidad = $row ['Cantidad'];
            $Codigo = $row ['Codigo'];
            $Descripcion = $row ['Descripcion'];
        }


    }

    if(isset($_POST['Actualizar'])){
        $id = $_GET['id'];
        $Nombre = $_POST['Nombre'];
        $Cantidad = $_POST['Cantidad'];
        $Codigo = $_POST['Codigo'];
        $Descripcion = $_POST['Descripcion'];

        $query = "UPDATE componentes set Nombre = '$Nombre', Cantidad = '$Cantidad', Codigo = '$Codigo', Descripcion = '$Descripcion' WHERE id = $id ";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Actualizado';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }


?>
<?php include('includes/header.html') ?>


    <div class="containet p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                   <form action="edit_task.php?id=<?php echo $_GET['id'];?>" method="POST" >
                       <div class="form-group">
                           <input type="text" name="Nombre" value="<?php echo $Nombre ; ?>"
                           class="from-control " placeholder="Actualizar Nombre"> 
                       </div>
                       <div class="form-group">
                           <input type="text" name="Cantidad" value="<?php echo $Cantidad ; ?>"
                           class="from-control mt-3" placeholder="Actualizar Cantidad"> 
                       </div>
                       <div class="form-group">
                           <input type="text" name="Codigo" value="<?php echo $Codigo ; ?>"
                           class="from-control mt-3" placeholder="Actualizar Codigo"> 
                       </div>
                       <div class="form-group">
                           <textarea name="Descripcion" rows="2" class="form-control mt-3" placeholder="Actualizar Descripcion" ><?php echo $Cantidad ?></textarea>
                       </div>
                       <button class="btn btn-success" name="Actualizar">
                            Actualizar
                       </button>
                   </form> 
                </div>
            </div>
        </div>

    </div>


<?php include('includes/fooder.html') ?> 