<?php

function maxArea($height){
    $maxArea = 0;
    $l = 0;
    $r = count($height) - 1;
    while($l < $r){
        $maxArea = max($maxArea , min($height[$l] , $height[$r]) * ($r - $l));
        if($height[$l] < $height[$r]){
            $l++;
        }else{
            $r--;
        }
    }
    return $maxArea;
}
$x = [1,8,6,2,5,4,8,3,7];

echo maxArea($x);
