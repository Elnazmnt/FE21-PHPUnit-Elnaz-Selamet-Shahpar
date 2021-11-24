<?php

namespace TDD;

class MathFunctions
{
    public function sum(array $numbers = [])
    {
        // takes array of items, by default an empty array
        return array_sum($numbers);
        // array_sum is built-in function which sums up the values inside an array
        // We could, of course, build our own sum solution :)
    }

    public function ageCalc($current, $birth)
    {
        return ($current - $birth);
    }

    public function sumOfFive($num1, $num2, $num3, $num4, $num5)
    {

        return $num1 + $num2 + $num3 + $num4 + $num5;
    }

    public function avg(array $numbers = [])
    {
        // takes array of items, by default an empty array
        return round(array_sum($numbers)/count($numbers), 2);
        // array_sum is built-in function which sums up the values inside an array
        // We could, of course, build our own sum solution :)
    }
}
