<?php
class Calc {
    private $valor1;
    private $valor2;
    private $resultado;
 
    public function somar($valor1, $valor2) {
        $resultado = $valor1 + $valor2;
        return $resultado;
    }
 
    public function subtrair($valor1, $valor2) {
        $resultado = $valor1 - $valor2;
        return $resultado;
    }
 
    public function multiplicar($valor1, $valor2) {
        $resultado = $valor1 * $valor2;
        return $resultado;
    }
 
    public function dividir($valor1, $valor2) {
        if ($valor2 != 0) {
            $resultado = $valor1 / $valor2;
            return $resultado;
        } else {
            return 'Erro: Divisão por zero.';
        }
    }
 
    public function potencia($base, $expoente) {
        $resultado = pow($base, $expoente);
        return $resultado;
    }
 
    public function raizQuadrada($numero) {
        if ($numero >= 0) {
            $resultado = sqrt($numero);
            return $resultado;
        } else {
            return 'Erro: Não é possível calcular a raiz quadrada de um número negativo.';
        }
    }
}
?>