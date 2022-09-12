<?php

const INPUT = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

function rangeSum(int $num1, int $num2): int
{
    if ($num1 < 1 || $num2 < 1) {
        return -1;
    }


    if ($num1 > $num2) {
        return 0;
    }

    if (!in_array($num1, INPUT) && !in_array($num2, INPUT)) {
        return 0;
    }

    if (!in_array($num2, INPUT)) {
        return array_sum(array_slice(INPUT, array_search($num1, INPUT), count(INPUT)));
    }

    $start = array_search($num1, INPUT);

    return array_sum(
        array_slice(
            INPUT,
            $start,
            array_search($num2, INPUT) - $start + 1
        )
    );

}

var_dump(rangeSum(10, 120));