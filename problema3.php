<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frecuencia de caracteres</title>
</head>
<body>
    <h1>Calcular Frecuencia de Caracteres</h1>
    <form method="post">
        <label for="cadena">Ingrese una cadena de texto:</label><br>
        <input type="text" id="cadena" name="cadena" required><br><br>
        <input type="submit" value="Calcular Frecuencia">
    </form>

    <?php
function frecuencia_caracteres($cadena) {
    $frecuencia = array();
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

if(isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $resultado = frecuencia_caracteres($cadena);
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";
}
?>


</body>
</html>
