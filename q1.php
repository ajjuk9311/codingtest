<?php
            $a= array('3','5','2','6','1','6');
            $sum = 0;
            foreach ($a as $key => $value) {
                 $sum = $sum+$value;
            }
            echo implode(',',$a).'<br>'. 'total sum of Numbers :- '.$sum.'<br>';   
?>