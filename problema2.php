<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Ingrese los números del array:</h2>
    <form method="post" action="">
        <label for="numeros">Ingrese los números separados por comas:</label><br>
        <input type="text" id="numeros" name="numeros"><br><br>
        <input type="submit" value="Calcular suma">
    </form>

    <?php
    function suma_numeros_pares($array) {
        $suma = 0;
        foreach ($array as $num) {
            if ($num % 2 == 0) {
                $suma += $num;
            }
        }
        return $suma;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numeros']) && !empty($_POST['numeros'])) {
            $array_numeros = explode(",", $_POST['numeros']);
            $array_numeros = array_map('intval', $array_numeros);
            $resultado = suma_numeros_pares($array_numeros);
            echo "<h2>La suma de los números pares en el array es: $resultado</h2>";
        } else {
            echo "<h2 style='color: red;'>Por favor, ingrese los números del array.</h2>";
        }
    }
    ?>
    
</body>
</html>