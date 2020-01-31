<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    return recursive($A);
}

function recursive($A, $word="", $len=0) {
    $_len = $len;
    foreach($A as $a) {
        $_word = $word . $a;
        
        $next = true;
        $b = array();
        $c = strlen($_word);
        for($i = 0; $i < $c; $i++) {
            $d = substr($_word, $i, 1);
            if(in_array($d, $b)) {
                $next = false;
            } else {
                $b[] = $d;
            }
        }

        if($next) {
            $len = $c;
            if($len > $_len) {
                $_len = recursive($A, $_word, $len);
            }
        }
    }
    
    return $_len;
}
