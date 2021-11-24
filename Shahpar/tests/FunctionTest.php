<?php

namespace TDD\Test;
use  PHPUnit\Framework\TestCase;

use function TDD\Add;
use function TDD\division;

require "src/functions.php";

class FunctionTest1 extends TestCase {
    public function testAddition(){

        $this-> assertEquals(4, add(2,2));
        $this-> assertEquals(1, add(-3,4));

    }
}