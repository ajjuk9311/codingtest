<?php
          
            $ajl= array('0','0','1','0','0','1','1','1','0','1');
            $count = array();
            $number =0;
            foreach ($ajl as $key => $value) {
                if ($value == 1) {
                    $number++;
                   $count[]=$number; 
                }else{
                    $number = 0;
                }
            }
            foreach ($count as $value) {
                foreach ($count as $key => $value_greater) {
                    if ($value > $value_greater) {
                        $gretaer_value = $value;
                    }
                }
            }
            echo implode('',$ajl).' Max num of consecutive 1 is '.$gretaer_value.'<br>'; 
        
        ?>