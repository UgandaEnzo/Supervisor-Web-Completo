<?php include('db.php') ?>
<?php include('includes/header.html') ?> 


<div class="container p-4">

    <div class="row">

        <div class="col-mb-4">

            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_task.php" method="POST" >
                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control"
                        placeholder="Agrega nombre del componente"autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Cantidad" class="form-control mt-3" 
                        placeholder="Ingrese una Cantidad">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Codigo" class="form-control mt-3"
                        placeholder="Ingrese el Codigo">
                    </div>
                    <div class="form-group">
                        <textarea name="Descripcion" rows="2" class="form-control mt-3"
                        placeholder="Ingrese una descripcion"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block mt-3" 
                        name="save_task" value="Save">
                </form>

            </div>

        </div>
        <div class="col-mb-8">
            <table class ="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Fecha de creacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM componentes";
                        $result_comp = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_comp)){?>
                            <tr>
                                <td><?php echo $row ['Nombre'] ?></td>
                                <td><?php echo $row ['Cantidad'] ?></td>
                                <td><?php echo $row ['Codigo'] ?></td>
                                <td><?php echo $row ['Descripcion'] ?></td>
                                <td><?php echo $row ['Tiempo'] ?></td>

                                <td>
                                    <a href="edit_task.php?id=<?php echo $row ['ID'] ?>" class="btn btn-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row ['ID'] ?>" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                       <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include('includes/fooder.html') ?> 
 