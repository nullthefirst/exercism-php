<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $string1 = join("", $digitsOfNumber1);
        $string2 = join("", $digitsOfNumber2);

        return (int) $string1 + (int) $string2;
    }

    public function isPalindrome(int $number): bool
    {
        $num = "$number";
        if ($num === strrev($num)) {
            return true;
        } else {
            return false;
        }
    }

    public function validate(string $input): string
    {
        if ($input === "") {
            return "Required field";
        } else if ((int) $input <= 0) {
            return "Must be a whole number larger than 0";
        } else {
            return "";
        }
    }
}
