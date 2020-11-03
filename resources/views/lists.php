<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Listado de productos</h1>
                <?php
                    foreach ($products as $product) {
                        echo "<strong>{$product->name}</strong> - {$product->description} <br>";
                    }
                ?>
                <hr>
                <p>
                    <a href="pdf.php">Exportar en PDF</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>