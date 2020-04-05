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
}


?>