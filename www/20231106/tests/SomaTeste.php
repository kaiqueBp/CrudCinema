<?php

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase{
    public function testSoma(){
        $resultado = 1 + 1;
        $this->assertEquals(2,$resultado);
    }
}