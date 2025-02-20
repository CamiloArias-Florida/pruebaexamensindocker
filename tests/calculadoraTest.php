<?php

use PHPUnit\Framework\TestCase;
use App\calculadora;

class CalculadoraTest extends TestCase{
  public function testSumar(){
    $calc = new calculadora();
    $this->assertEquals(4, $calc->sumar(2, 2));
  }

  public function testRestar(){
    $calc = new calculadora();
    $this->assertEquals(0, $calc->restar(2, 2));
  }

  public function testMultiplicar(){
    $calc = new calculadora();
    $this->assertEquals(4, $calc->multiplicar(2, 2));
  }

    // otro assert q no sea equal

  public function testDividir(){
    $calc = new calculadora();
    $this->assertSame(1, $calc->dividir(2, 2));
  }

    
}