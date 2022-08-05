<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/vainilla.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro Cliente</title>
</head>
<body>
    <form class="mx-auto w-25 mt-3 bg-primary p-4 text-white rounded-4 " action="./scripts/guardacliente.php" method="POST">
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre">
        <label for="apellidop">Apellido Paterno</label>
        <input class="form-control" type="text" name="apellidop" placeholder="Escribe tu Apellido Paterno">
        <label for="apellidom">Apellido Materno</label>
        <input class="form-control" type="text" name="apellidom" placeholder="Escribe tu Apellido Materno">
        <label for="direccion">Direccion</label>
        <input class="form-control" type="text" name="direccion" placeholder="Escribe tu direccion">
        <label for="telefono">Telefono</label>
        <input class="form-control" type="text" name="telefono" placeholder="Escribe tu telefono">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Escribe tu Correo Electronico">
        
        <?php
          use MyApp\Query\Select;  
          require('../vendor/autoload.php');
          $query = new Select();

          $chain = "SELECT id_departamento as id_depa, nombre as departamento from departamento; ";
            $reg = $query->Seleccionar($chain);

            echo "<div class='mb-3'>
            <label class='control-label'>Departamento</label>
            <select class='form-control' name='depa'>";
            foreach($reg as $value){
                echo "<option value='".$value->id_depa."'>".$value->departamento."</option>";
            }
            echo "</select>";
            ?>

        <button class="btn btn-success mt-3 d-block w-100" type="submit">Guardar</button>
    </form>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>