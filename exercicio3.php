<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form method="get">
        <label for="numero">insira um numero:</label>
        <input type="number" id="numero" name="numero">

        <input type="submit" value="calcular">
    </form>

    <?php
        $antecessor = intval($_GET['numero'])  - 1;
        $sucessor = intval($_GET['numero']) + 1;

        echo $antecessor . ' é antecessor de ' . $_GET['numero'] . ', ' . $sucessor . ' é o sucessor'; 

    ?>

</body>
</html>