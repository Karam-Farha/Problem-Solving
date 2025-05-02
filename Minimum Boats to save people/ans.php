<?php
$weights = [1, 8, 6, 2, 5, 4, 8, 3, 7];
sort($weights); // Sorts the array in ascending order
$limit = 8;
$ans = 0;
$left = 0;
$right = count($weights) - 1;

while ($left <= $right) {
    if ($weights[$left] + $weights[$right] <= $limit) {
        $left++;
        $right--;
        $ans++;
    } else {
        $right--;
        $ans++;
    }
}

echo "Number of pairs: " . $ans;