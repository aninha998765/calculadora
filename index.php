<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h1> Calculadora Simples </h1>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <label for="num1">Num1: </label>
        <input type="text" name="num1">
        <label for="num2">Num2: </label>
        <input type="text" name="num2">

       <input type="reset" value="reset">

        <select name="operator">
            <option value="add">Adição</option>
            <option value="subtract">Subtração</option>
            <option value="multiply">Multiplicação</option>
            <option value="divide">Divisão</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;

            case 'subtract':
                $result = $num1 - $num2;
                break;

            case 'multiply':
                $result = $num1 * $num2;
                break;

            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Erro: divisão por zero não é permitida.";
                }
                break;

            default:
                echo "Operador inválido.";
                break;
        }

        echo "Resultado: " . $result;
    }
    ?>
<head>
    <title>Exemplo de exibição de imagem em PHP</title>
</head>
<body>
    <br> <br>
    <img src="humor12.jpg" alt="Minha Imagem">
</body>

</body>
</html>
