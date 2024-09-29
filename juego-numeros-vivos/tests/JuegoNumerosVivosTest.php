<?php

use PHPUnit\Framework\TestCase;

class JuegoNumerosVivosTest extends TestCase {

    protected function setUp(): void {
        require_once __DIR__ . '/../juego-numeros-vivos.php';
    }

    protected int $maxSteps = 1000;

    public function testNumContainsFive() {
        $this->assertTrue(numContainsFive(5));
        $this->assertTrue(numContainsFive(15));
        $this->assertFalse(numContainsFive(4));
        $this->assertFalse(numContainsFive(123));
    }

    public function testReplaceFiveByZero() {
        $this->assertEquals(0, replaceFiveByZero(5));
        $this->assertEquals(100, replaceFiveByZero(150));
        $this->assertEquals(123, replaceFiveByZero(123));
    }

    /**
     * @throws Exception
     */
    public function testJuegoNumerosVivos() {
        $this->assertEquals(1, juegoNumerosVivos(2, $this->maxSteps));
        $this->assertEquals(2, juegoNumerosVivos(4, $this->maxSteps));
        $this->assertEquals(3, juegoNumerosVivos(8, $this->maxSteps));
        $this->assertEquals(5, juegoNumerosVivos(13, $this->maxSteps));
    }

    public static function infiniteLoopDataProvider(): array
    {
        return [
            [3],
            [7],
            [9],
            [27],
        ];
    }

    /**
     * @dataProvider infiniteLoopDataProvider
     */
    public function testInfiniteLoopReturnsException($num) {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Step limit has been reached, infinite loop possible.");

        juegoNumerosVivos($num, $this->maxSteps);
    }
}
