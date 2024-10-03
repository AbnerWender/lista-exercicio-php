<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

    <form method="get">
        <label for="numero">Numero:</label>
        <input type="number" id="numero" name="numero">

        <input type="submit" value="calcular">
    </form>

    <?php
        $numero = $_GET['numero'];
        
        echo $numero % 2 == 0 ? $numero . ' é par' : $numero . ' é impar';
    ?>
    
</body>
</html>