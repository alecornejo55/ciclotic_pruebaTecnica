<?php
function cargarDatos()
{
    $ruta_archivo = 'datos.txt';
    $archivo = fopen($ruta_archivo, 'r');
    $datos = [];
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        list($nombre, $edad) = explode(',', $linea);
        array_push($datos, array("nombre" => $nombre, "edad" => $edad));
    }
    fclose($archivo);
    return $datos;
}
function calcularPromedio($personas)
{
    $suma = 0;
    foreach ($personas as $persona) {
        $suma += $persona['edad'];
    }
    return $suma / count($personas);
}
$personas = cargarDatos();
?>
<!DOCTYPE html>
<html>

<head>
    <title>3. Manipulación de Archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-5">
        <h1>3. Manipulación de Archivos</h1>
        <div>
            <p>
                <b>A) Nombres y edades:</b>
            <ul>
                <?php
                foreach ($personas as $persona) :
                ?>
                    <li>Nombre: <?= $persona['nombre'] ?>, Edad: <?= $persona['edad'] ?></li>
                <?php endforeach; ?>
            </ul>
            </p>
            <p>
                <b>B) Promedio de edades:</b> <?= calcularPromedio($personas); ?>
            </p>
        </div>
        <a href="index.php">Volver a la página de inicio</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>