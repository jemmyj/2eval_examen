<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
        $calc = new Enana('Jaume', 20, 'viva');
        $this->assertEquals('viva', $calc->heridaLeve());
       
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva

    }

    public function testHeridaLeveMuere() {
        $calc = new Enana('Jaume', 5, 'viva');
        $this->assertEquals('muerta', $calc->heridaLeve());
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
        $calc = new Enana('Jaume', 20, 'viva');
        $this->assertEquals('limbo', $calc->heridaLeve());
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {
        $calc = new Enana('Jaume', -5, 'muerta');
        $this->assertEquals('viva', $calc->heridaLeve());
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaExtraLimbo() {
        $calc = new Enana('Jaume', 0, 'limbo');
        $this->assertEquals('viva', $calc->heridaLeve());
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}


?>