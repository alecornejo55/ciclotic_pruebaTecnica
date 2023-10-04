<?php
$frutas = array("manzana", "banana", "cereza", "durazno", "fresa", "uva");
?>
<!DOCTYPE html>
<html>

<head>
    <title>1. Manipulación de Arrays y Strings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-5">
        <h1>1. Manipulación de Arrays y Strings</h1>
        <div>
            <p>
                <b>Array original:</b> $frutas = array("manzana", "banana", "cereza", "durazno", "fresa", "uva");
            <ul>
                <?php foreach ($frutas as $fruta) : ?>
                    <li><?= $fruta ?></li>
                <?php endforeach; ?>
            </ul>
            </p>
            <p>
                <b>A) Array invertido:</b>
            <ul>
                <?php
                $frutas_invertidas = array_reverse($frutas);
                foreach ($frutas_invertidas as $fruta) :
                ?>
                    <li><?= $fruta ?></li>
                <?php endforeach; ?>
            </ul>
            </p>
            <p>
                <b>B) Array convertido a string separado por signo "-"</b>
            <ul>
                <li><?= implode('-', $frutas); ?></li>
            </ul>
            </p>
            <p>
                <b>C) Fruta con mayor cantidad de letras:</b>
            <ul>
                <?php
                $mayor = $frutas[0];
                for ($i = 1; $i < count($frutas); $i++) {
                    $fruta = $frutas[$i];
                    if (strlen($fruta) > $mayor) {
                        $mayor = $fruta;
                    }
                }
                ?>
                <li><?= $mayor ?></li>
            </ul>
            </p>
        </div>
        <a href="index.php">Volver a la página de inicio</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>