<?php

namespace TDD\Test;
// declare(strict_types=1); 
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\MathFunctions; // imports MathFunctions class
// Create Test Class

/*
* @covers  TDD\MathFunctions
*/

class FileTest extends  TestCase
{

    public function  testSum()
    {

        $obj = new MathFunctions(); // dummy object for testing
        $input = [0, 2, 5, 8]; // put the inputs in its own array
        $output = $obj->sum($input); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            15, // 1st param is the expected value
            $output, // 2nd param is the $output variable
            'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
        );
    }

    public  function testAgeCalc()
    {
        $obj = new MathFunctions(); // dummy object for testing    
        $output = $obj->ageCalc(2021, 1987);
        $this->assertEquals(
            34,
            $output,
            'Wrong age calculated, expected: 34'
        );
    }

    public function testSumOfFive()
    {
        $obj1 = new MathFunctions();
        $output1 = $obj1->sumOfFive(4, 4, 4, 4, 4);
        $this->assertEquals(20, $output1, "Sum should be 20.");

        $obj2 = new MathFunctions();
        $output2 = $obj2->sumOfFive(4, 4, 4, 4, null);
        $this->assertEquals(16, $output2, "Sum should be 16.");


        $obj3 = new MathFunctions();
        $output3 = $obj3->sumOfFive(null, null, null, null, null);
        $this->assertEquals(0, $output3, "Sum should be 0.");
    }

    public function  testAvg()
    {

        $obj = new MathFunctions(); // dummy object for testing
        $input = [0, 4, 5, 7]; // put the inputs in its own array
        $output = $obj->avg($input); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            4, // 1st param is the expected value
            $output, // 2nd param is the $output variable
            'Average should be 4' // 3rd param is a message displayed in case of failure
        );

        $obj2 = new MathFunctions(); // dummy object for testing
        $input2 = [0, 6, 5, 7]; // put the inputs in its own array
        $output2 = $obj2->avg($input2); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            4.5, // 1st param is the expected value
            $output2, // 2nd param is the $output variable
            'Average should be 4.5' // 3rd param is a message displayed in case of failure
        );

        $obj3 = new MathFunctions(); // dummy object for testing
        $input3 = [0, 0, 5, 7, null]; // put the inputs in its own array
        $output3 = $obj3->avg($input3); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            2.4, // 1st param is the expected value
            $output3, // 2nd param is the $output variable
            'Average should be 2.4' // 3rd param is a message displayed in case of failure
        );


        $obj4 = new MathFunctions(); // dummy object for testing
        $input4 = [0, 0, 5]; // put the inputs in its own array
        $output4 = $obj4->avg($input4); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            1.67, // 1st param is the expected value
            $output4, // 2nd param is the $output variable
            'Average should be 1.67' // 3rd param is a message displayed in case of failure
        );
    }
}
