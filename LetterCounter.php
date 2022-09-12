<?php

class LetterCounter
{
    static function CountLettersAsString(string $input)
    {
        $array = str_split(strtolower($input));
        $temp = [];

        array_map(function ($element) use (&$temp) {
            $temp[$element] .= "*";
        }, $array);

        array_walk($temp, function (&$e, $k) {
            $e = $k . ":" . $e;
        });


        return implode(",", $temp);
    }
}

LetterCounter::CountLettersAsString("TestGorilla");
