<?php

namespace App\Test\unit;

use App\HolaMundo;
use PHPUnit\Framework\TestCase;

class HolaMundoTest extends TestCase
{
    /**
     * @covers App\HolaMundo::saluda
     */
    public function testDiceHolaMundoCuandoSaluda()
    {
        $holaMundo = new HolaMundo();

        $this->assertEquals('Hola Mundo', $holaMundo->saluda());
    }
}
