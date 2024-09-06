<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="numero1">Número 1: </label>
        <input type="text" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2: </label>
        <input type="text" name="numero2">
        <br><br>
        <label for="operacao">Operação</label>
        <select name="operacao" id="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="potencia">Potência</option>
            <option value="raizQuadrada">Raiz Quadrada</option>
        </select>
        <br><br>
        <input class="botão-enviar" type="submit" value="Calcular">
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'Calc.php';
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
        $total = 0;
 
        $calc = new Calc();
 
        if ($operacao == "somar") {
            $total = $calc->somar($numero1, $numero2);
        } elseif ($operacao == "subtrair") {
            $total = $calc->subtrair($numero1, $numero2);
        } elseif ($operacao == "multiplicar") {
            $total = $calc->multiplicar($numero1, $numero2);
        } elseif ($operacao == "dividir") {
            $total = $calc->dividir($numero1, $numero2);
        } elseif ($operacao == "potencia") {
            $total = $calc->potencia($numero1, $numero2);
        } elseif ($operacao == "raizQuadrada") {
            // A raiz quadrada só usa o primeiro número
            $total = $calc->raizQuadrada($numero1);
        }
 
        echo "<h2>Resultado: $total</h2>";
    }
    ?>
</body>
</html>
 