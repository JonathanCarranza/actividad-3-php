<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pirámide de asteriscos</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];

    for ($i = 0; $i < $altura; $i++) {
        for ($j = 0; $j < $altura - $i - 1; $j++) {
            echo " ";
        }

        for ($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }

        echo "<br>";
    }
} else {
?>

<h2>Ingrese la altura de la pirámide:</h2>
<form method="post">
  Altura: <input type="number" name="altura" required>
  <input type="submit" value="Generar pirámide">
</form>

<?php
}
?>

</body>
</html>
