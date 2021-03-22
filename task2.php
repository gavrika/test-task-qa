<?php

declare(strict_types=1);

$tests = [
    "case 1" => "racecar", //Palindrome letters
    "case 2" => "123321", //Palindrome of numbers
    "case 3" => "nNn", //Mirror combine
    "case 4" => "!@$##$@!", //Palindrome of symbols
    "case 5" => "0000", //the same numbers 
    "case 6" => "rac e car",//Palindrome letters and spaces
    "case 7" => "", //empty 
    "case 8" => "arozaup", //Random letters
    "case 9" => "rac eca r", //Random spaces into palindrome word
    "case 10" => "5673865", //Random numbers
    "case 11" => "nñ", //similar sign with extra symbol
    "case 12" => "NnNn", //Uppercase and lowercases combinations 
    "case 13" => "aа", //spanish and russian letters
    "case 14" => null // null value
];

function isPalindrome(string $myString): bool {
    return strrev($myString) == $myString;
}

function isPalindrome2($myString): bool {
    $length = mb_strlen($myString);
    if ($length === 0 || $length === 1) {
        return true;
    }

    $begin = 0;
    $end = $length - 1;

    $result = true;
    while ($begin < $end) {
        if ($myString[$begin] !== $myString[$end]) {
            $result = false;
            break;
        }
        $begin++;
        $end--;
    } 

    return $result;
}

foreach ($tests as $name => $case) {
    echo "Test $name => result is: " . (isPalindrome2($case) ? "true" : "false") . "\n";
}
