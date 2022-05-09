<?php 

    include "clases/conexion.php"; 

    $c = new Conexion();//mando a llamar la clase del doc conexion
    $conexion = $c->conectar();//al mismo tiempo mando a llamar el metodo function para guardar el resultado en la variable
    $sql = "SELECT * FROM t_graficas";//llamo la tabla con la que voy a trabajar
    $result = mysqli_query($conexion,$sql);//union para acceder a la base y la tabla


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "app/dependencias.php" ?>
</head>

<body>
    <div class="container mt-5 text-center ">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h2>Listado de graficas</h2>
                <table border="3" class="table table-bordered border-dark mt-4">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Vram</th>
                        </tr>
                    </thead>
                    <?php 
                        while($ver = mysqli_fetch_array($result)):
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $ver['marca'] ?></td>
                            <td><?php echo $ver['modelo'] ?></td>
                            <td><?php echo $ver['vram'] ?></td>
                        </tr>
                    </tbody>
                    <?php 
                        endwhile;
                    ?>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>