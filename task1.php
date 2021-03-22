<?php

declare(strict_types=1);

$tests = [
    "case 1" => [4, 8, 12, 16, 20, 24, 28, 32, 36, 40],
    "case 2" => [6, 12, 18, 24, 30, 36, 42, 48, 54, 60],
    "case 3" => [12, 24, 48, 96, 192, 384, 768, 1536, 3072, 6144],
    "case 4" => [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 6, 18, 30, 36, 42, 48, 54, 60, 96, 192, 384, 768, 1536, 3072, 6144],
    "case 5" => [-4, -8, -12, -16, -20, -24, -28, -32, -36, -40, -6, -18, -30, -36, -42, -48, -54, -60, -96, -192, -384, -768, -1536, -3072, -6144],
    "case 6" => [0],
    "case 7" => [5, 9, 11, 17, 21, 26, 29, 31, 38, 46],
    "case 8" => [null],
    "case 9" => ["!", "@", "£", "$", "%", "^", "&", "*", "?", "~"],
    "case 10" => ["a", "b", "c", "d", "e", "f", "g", "h", "i", "g", "k", "l", "m", "n", "o", "p"],
    "case 11" => ["row", "row", "row", "your", "boat", "gently", "down", "the", "stream"],
    "case 12" => ["row", "!", "a", 4, 5, 6, -12]
];

function countMultipliers(array $input): int
{
    $count = 0;
    try {
        foreach ($input as $value) {
            $mod4 = fmod($value, 4);
            $mod6 = fmod($value, 6);
            if ($mod4 == 0 || $mod6 == 0) {
                $count++;
            }
        }
    } catch (\Throwable $e) {
        echo "err:" . $e->getMessage() . "\n";
    }
    return $count;
}

foreach ($tests as $name => $case) {
    echo "Test $name => Count is: " . countMultipliers($case) . "\n";
}
