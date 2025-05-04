<?php
function findMin(string $txt, string $pattern): string{ 

    $tgt = array();
    foreach (str_split($pattern) as $ch) {
        if (!isset($tgt[$ch])) {
            $tgt[$ch] = 0;
        }
        $tgt[$ch]++;
    }

    $src = array();
    $best = "";
    $min_len = strlen($txt) + 1;
    $j = 0;

    for ($i = 0; $i < strlen($txt); $i++) {

        while ($j < strlen($txt) && !allCharsPresent($src, $tgt)) {
            $ch = $txt[$j];
            if (!isset($src[$ch])) {
                $src[$ch] = 0;
            }
            $src[$ch]++;
            $j++;
        }
        if (allCharsPresent($src, $tgt) && ($j - $i) < $min_len) {
            $min_len = $j - $i;
            $best = substr($txt, $i, $j - $i);
        }
        $src[$txt[$i]]--;
    }
    return $best;
}

function allCharsPresent($src, $tgt) {
    foreach ($tgt as $ch => $count) {
        if (!isset($src[$ch]) || $src[$ch] < $count) {
            return false;
        }
    }
    return true;
}

echo(findMin("ADOBECODEBANC" , "ABC"));

?>