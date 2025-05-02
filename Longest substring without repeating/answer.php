<?php

function longestSubString($str){
    $length = strlen($str);
    
    if($length <= 1)
        return $length;

    $seenCharacters = [];
    $l = $r = $longest = 0;
    
    while($l < $length && $r < $length ){
        $current_char = $str[$r];
        if(array_key_exists($current_char , $seenCharacters)){
            $l = $seenCharacters[$current_char] + 1;
        }

        $seenCharacters[$current_char] = $r;
        $longest = max($longest , $r - $l + 1);
        $r++;
    }
    return $longest;
}
// Here You Can Change The output To See Diffrent Results
echo(longestSubString('abaacdrr'));