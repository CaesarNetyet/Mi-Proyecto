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
        <h1 class="text-center">Ver clientes</h1>
        <?php
        use MyApp\Query\Select;
        require('../vendor/autoload.php');

        $query = new Select();

        $chain = "SELECT * FROM cliente";
        $tabla = $query->Seleccionar($chain);
        echo "
        <table class='table table-striped>
            <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Departamento</th>
                </tr>
            </thead>    
            <tbody>";
        foreach ($tabla as $registro){
            echo '<tr>';
            echo "<td> $registro->id_cliente </td>";
            echo "<td> $registro->nombre </td>";
            echo "<td> $registro->ap_paterno </td>";
            echo "<td> $registro->ap_materno </td>";
            echo "<td> $registro->direccion </td>";
            echo "<td> $registro->telefono </td>";
            echo "<td> $registro->mail </td>";
            echo "<td> $registro->departamento </td>";
            echo '</tr>';
        }
        echo "</tbody>;
        </table>";
        ?>
    </div>
    

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>