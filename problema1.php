<!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="datos">Ingrese los datos del array (separados por comas):</label><br>
    <input type="text" id="datos" name="datos"><br>
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos_ingresados = $_POST["datos"];
    
    $array = explode(",", $datos_ingresados);
    
    $array_invertido = array_reverse($array);
    
    echo "El array ingresado, invertido, es: <br>";
    foreach ($array_invertido as $elemento) {
        echo $elemento . "<br>";
    }
}
?>

</body>
</html>
