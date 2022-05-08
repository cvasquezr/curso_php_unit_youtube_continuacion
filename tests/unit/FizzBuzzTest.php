<?php

namespace App\Test;

use App\FizzBuzz;
use Exception;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{
    private $fizzBuz;

    public function template(): array
    {
        return [
            [3, 'Fizz'],
            [9, 'Fizz'],
            [12, 'Fizz']
        ];
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @dataProvider template
     * @param int $number
     * @param string $expectResult
     */
    public function testWhenGiveNumberDvisibleByThreeReturnFizz(int $number, string $expectResult): void
    {
        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertEquals($expectResult, $result);
    }

    public function testWhenGiveNumberFiveReturnBuzz(): void
    {
        $number = 5;

        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertEquals('Buzz', $result);
    }

    public function testWhenGiveNumberReturnFizzBuzz(): void
    {
        $number = 15;

        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertEquals('FizzBuzz', $result);
    }

    public function testWhenGiveNumberReturnNumber(): void
    {
        $number = 8;

        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertEquals(8, $result);
    }

    public function testWhenGiveThreeReturnString(): void
    {
        $number = 3;

        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertIsString($result);
    }

    public function testWhenGiveTwoReturnNumber(): void
    {
        $number = 2;

        $result = $this->fizzBuzz->sayNumber($number);

        $this->assertIsInt($result);
    }

    public function testTheCountIsZeroIsNobodyTellMeANumber(): void
    {
        $this->assertEquals(0, $this->fizzBuzz->tellMeTheCount());
    }

    public function testTheCountIncrement()
    {
        $this->fizzBuzz->sayNumber(1);
        $this->fizzBuzz->sayNumber(3);

        $this->assertEquals(2, $this->fizzBuzz->tellMeTheCount());
    }

    public function testWhenAErrorHappened()
    {
        $this->fizzBuzz->sayNumber(1);

        $this->expectException(Exception::class);
        throw new \Exception('Ha ocurrido un error');
    }
}
