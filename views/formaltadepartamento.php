<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/vainilla.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro Cliente</title>
</head>
<body class="bg-dark d-flex align-items-center justify-items-center vh-100">
    <form class=" mx-auto text-center  w-25 mt-3 bg-warning p-4 text-dark rounded-4 " action="./scripts/guardadepartamento.php" method="POST">
        <label for="nombre ">Departamento</label>
        <input class="form-control text-center" type="text" name="nombre" placeholder="Escribe el nombre de tu departamento">

        <button class="btn btn-success mt-3 d-block w-100" type="submit">Guardar</button>
    </form>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>