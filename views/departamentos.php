<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/vainilla.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver clientes</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ver Departamentos</h1>
        <?php
        use MyApp\Query\Select;
        require('../vendor/autoload.php');

        $query = new Select();

        $chain = "SELECT * FROM departamento";
        $tabla = $query->Seleccionar($chain);
        echo "
        <table class='table table-striped>
            <thead class='thead-dark'>
                <tr>
                    <th>ID del Departamento</th>
                    <th>Departamento</th>
                    <th>Fecha de creacion</th>
                </tr>
            </thead>    
            <tbody>";
        foreach ($tabla as $registro){
            echo '<tr>';
            echo "<td> $registro->id_departamento </td>";
            echo "<td> $registro->nombre </td>";
            echo "<td> $registro->fecha_creacion </td>";
            echo '</tr>';
        }
        echo "</tbody>;
        </table>";
        ?>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>