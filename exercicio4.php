<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
 
    <form method="get">
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso">

        <label for="altura">Altura em (m):</label>
        <input type="float" id="altura" name="altura">

        <input type="submit" value="calcular">
    </form>

    <?php
        $peso = intval($_GET['peso']);
        $altura = floatval($_GET['altura']);

        $imc = $peso / $altura**2;

        echo 'o IMC de ' . $peso . 'kg é ' . $imc;
    ?>

</body>
</html>