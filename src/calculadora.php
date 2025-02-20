<?php
namespace App;

class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }
    
    public function restar($num1, $num2) {
        return $num1 - $num2;
    }
    
    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }
    
    public function dividir($num1, $num2) {
        if ($num2 == 0) {
            throw new \InvalidArgumentException("No se puede dividir por cero");
        }
        return $num1 / $num2;
    }

    public function raizCuadrada($num1) {
        if ($num1 < 0) {
            throw new \InvalidArgumentException("No se puede calcular la raiz cuadrada de un número negativo");
        }
        return sqrt($num1);
    }
}