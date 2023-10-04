<?php
function esPrimo($numero)
{
    if ($numero < 2) return false;
    $es_primo = true;
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $es_primo = false;
            break;
        }
    }
    return $es_primo;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>2. Funciones y Control de Flujo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-5">
        <h1>2. Funciones y Control de Flujo</h1>
        <div>
            <p>
                Escribe una función llamada `esPrimo` que tome un número como argumento y devuelva `true` si el número es primo y `false` en caso contrario.<br>
                Usa esta función para mostrar todos los números primos entre 1 y 100.
            </p>
            <p>Resultado:</p>
            <ul>
                <?php for ($i = 1; $i <= 100; $i++) {
                    if (esPrimo($i)) : ?>
                        <li><?= $i ?></li>
                <?php
                    endif;
                }
                ?>
            </ul>
        </div>
        <a href="index.php">Volver a la página de inicio</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>