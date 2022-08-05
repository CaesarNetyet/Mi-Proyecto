<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/vainilla.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container">

    <?php
    use MyApp\Query\Ejecuta;
    require('../../vendor/autoload.php');
    $insert = new Ejecuta();
    extract($_POST);
    $cadena = "Insert INTO cliente (nombre, ap_paterno, ap_materno, direccion, telefono, mail, departamento) VALUES ('$nombre', '$apellidop', '$apellidom', '$direccion', '$telefono', '$email', $depa)";
    $insert->ejecutar($cadena);

    echo "<div class='alert alert-success'>Cliente Registrado</div>";
    header("refresh:3; ../../index.php ");
    ?>

    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>