<?php

        $number = 7;
        $array =array(0,1,-2,-1,4,5,-8,2,3,5,-7,4,2);
        $pair =array();
        foreach ($array as $key => $value) {
            foreach ($array as $key_match => $value_matched) {
                if ($key != $key_match) {
                    if ((($value + $value_matched) == $number ||(($value + $value_matched) == -$number))) {
                        $pair[]= '('.$value.','.$value_matched.')';
                    }
                }
            }
        }
        echo 'the pairs whose sum is the ' . $number.' value :- '.implode(',',$pair);
?>
