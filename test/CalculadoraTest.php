<?php

include_once('./src/Calculadora.php');

use PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase{

    

    public function testSuma(){
        $Calculadora = new Calculadora();
        $this->assertEquals($Calculadora->Suma(2,2), 4);
        }

        public function testResta(){
            $Calculadora = new Calculadora();
            $this->assertEquals($Calculadora->Resta(2,2), 0);
            }

            public function testMultiplicacion(){
                $Calculadora = new Calculadora();
                $this->assertEquals($Calculadora->Multiplicacion(2,3), 6);
                }
}


?>