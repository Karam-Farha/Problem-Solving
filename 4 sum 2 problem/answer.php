<?php

function countTuples($A, $B, $C, $D) {
    $sumAB = array();
    $count = 0;

    foreach ($A as $x1) {
        foreach ($B as $x2) {
            $sum = $x1 + $x2;
            if (!isset($sumAB[$sum])) {
                $sumAB[$sum] = 0;
            }
            $sumAB[$sum]++;
        }
    }

    foreach ($C as $x3) {
        foreach ($D as $x4) {
            $target = -($x3 + $x4);
            if (isset($sumAB[$target])) {
                $count += $sumAB[$target];
            }
        }
    }

    return $count;
}

$A = [1, 2];
$B = [-2, -1];
$C = [-1, 2];
$D = [0, 2];
echo countTuples($A, $B, $C, $D); // Output: 2
?>