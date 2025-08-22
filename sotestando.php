<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <h1>Calculadora</h1>

    <form method="post">
        Numero 1: <input name="calc1" type="number" required><br><br>
        Numero 2: <input name="calc2" type="number" required><br><br>

        <input type="submit" value="Confirmar">
    </form>
    


    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["calc1"];
            $num2 = $_POST["calc2"];
            $resultado = $num1 + $num2;

            echo "<h3>Resultado: $resultado</h3>";

        }

    ?>

</body>
</html>