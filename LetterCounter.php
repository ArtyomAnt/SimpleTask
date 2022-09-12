<?php

class LetterCounter
{
    static function CountLettersAsString(string $input): string
    {
        $array = str_split(strtolower($input));
        $temp = array_fill_keys(array_values(array_unique($array)), null);

        array_map(function ($element) use (&$temp) {
            $temp[$element] ++;
        }, $array);

        array_walk($temp, function (&$e, $k) {
            $e = $k . ":" . str_repeat('*',$e);
        });


        return implode(",", $temp);
    }
}

echo LetterCounter::CountLettersAsString("TestGorilla");
