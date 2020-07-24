<?php
           
            $b = array('0','1','2','3','4','5','6','7','7','8','9','10','11','12','13','14','15','15','16','17','18','19','20');
            
            foreach ($b as $key => $value) {
                foreach ($b as $key_matched => $value_matched) {
                    if ($key != $key_matched) {
                            if ($value == $value_matched) {
                                $abc[]=$value;
                            }
                    }
                }
            }
            echo implode(',',$b).'<br>'.' REPEAT VALUE IN ARRAY FIND :-'.implode(',',$abc).'<br>'; 
     ?>