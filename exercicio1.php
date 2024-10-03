<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

    <form method="get">
        <label for="valorA">Valor A</label>
        <input type="number" id="valorA" name="valorA">

        <label for="valorB">Valor B</label>
        <input type="number" id="valorB" name="valorB">

        <label for="valorC">Valor C</label>
        <input type="number" id="valorC" name="valorC">

        <input type="submit" value="calcular">
    </form>

    <?php
        $valor1 = $_GET['valorA'];
        $valor2 = $_GET['valorB'];
        $valor3 = $_GET['valorC'];

        $soma = $valor1 + $valor2;

        echo $soma < $valor3 ? $soma . ' é menor que ' . $valor3 : $soma . ' é maior que ' . $valor3;

    ?>
</body>
</html>