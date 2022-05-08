<?php

namespace App;

class FizzBuzz
{
    private int $count = 0;

    public function tellMeTheCount(): int
    {
        return  $this->count;
    }

    public function sayNumber(int $number): string | int
    {
        ++$this->count;

        if ($number % 3 == 0 && $number % 5 == 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 == 0) {
            return 'Fizz';
        }

        if ($number % 5 == 0) {
            return 'Buzz';
        }

        return $number;
    }
}
