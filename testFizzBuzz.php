<?php
include 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase{
    function setUp(){
        $this->FizzBuzz = new FizzBuzz();
    }
    
    function testFizzInputOneShouldRetrunOne() {
        $expectedResult = 1;
        $actualResult = $this->FizzBuzz->calFizzBuzz(1);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
    function testFizzInputTwoShouldRetrunTwo() {
        $expectedResult = 2;
        $actualResult = $this->FizzBuzz->calFizzBuzz(2);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
    function testFizzInputThreeShouldRetrunFizz() {
        $expectedResult = 'Fizz';
        $actualResult = $this->FizzBuzz->calFizzBuzz(3);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
    function testFizzInputFiveShouldRetrunBuzz() {
        $expectedResult = 'Buzz';
        $actualResult = $this->FizzBuzz->calFizzBuzz(5);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
     function testFizzInput15ShouldRetrunFizzBuzz() {
        $expectedResult = 'FizzBuzz';
        $actualResult = $this->FizzBuzz->calFizzBuzz(15);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
    function testFizzInputDevideBy3ShouldRetrunFizz(){
        $expectedResult = 'Fizz';
        $actualResult = $this->FizzBuzz->calFizzBuzz(9);
        $this->assertEquals($expectedResult, $actualResult );
    }
    
}

