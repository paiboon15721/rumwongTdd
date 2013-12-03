<?php
class FizzBuzz{
    function calFizzBuzz($answer) {
        if (($answer % 3 == 0) and ($answer % 5 == 0)){
            $answer = 'FizzBuzz';
        }else if (($answer % 3 == 0)) {
            $answer = 'Fizz';
        } else if ($answer % 5 == 0) {
            $answer = 'Buzz';
        }
        return $answer;
    }
}