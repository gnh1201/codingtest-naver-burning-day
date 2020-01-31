<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {
    $a = $S;
    $b = strrev($S);
    $len = strlen($S);
    
    $c = array();
    for($i = 0; $i < $len; $i++) {
        $_a = substr($a, $i, 1);
        $_b = substr($b, $i, 1);
        
        if($_a == '?' && $_b == '?') {
            $c[] = 'z';
        } elseif($_a == '?') {
            $c[] = $_b;
        } elseif($_b == '?') {
            $c[] = $_a;
        } elseif($_a == $_b) {
            $c[] = $_a;
        } else {
            return "NO";
        }
    }

    return implode("", $c);
}
