<?php

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{
    public function template(): array
    {
        return [
            [3, 'Fizz'],
            [9, 'Fizz'],
            [12, 'Fizz']
        ];
    }

    /**
     * @dataProvider template
     * @param int $number
     * @param string $expectResult
     */
    public function testWhenGiveNumberDvisibleByThreeReturnFizz(int $number, string $expectResult): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertEquals($expectResult, $result);
    }

    public function testWhenGiveNumberFiveReturnBuzz(): void
    {
        $number = 5;

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertEquals('Buzz', $result);
    }

    public function testWhenGiveNumberReturnFizzBuzz(): void
    {
        $number = 15;

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertEquals('FizzBuzz', $result);
    }

    public function testWhenGiveNumberReturnNumber(): void
    {
        $number = 8;

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertEquals(8, $result);
    }

    public function testWhenGiveThreeReturnString(): void
    {
        $number = 3;

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertIsString($result);
    }

    public function testWhenGiveTwoReturnNumber(): void
    {
        $number = 2;

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->sayNumber($number);

        $this->assertIsInt($result);
    }

    public function testTheCountIsZeroIsNobodyTellMeANumber(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(0, $fizzBuzz->tellMeTheCount());
    }

    public function testTheCountIncrement()
    {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->sayNumber(1);
        $fizzBuzz->sayNumber(3);

        $this->assertEquals(2, $fizzBuzz->tellMeTheCount());
    }
}
