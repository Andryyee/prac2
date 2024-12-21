<?php
    function quickSort($array) {
        $length = count($array);
    
        if ($length <= 1) {
            return $array;
        } else {
            $pivot = $array[0];
            $left = $right = array();
    
            for ($i = 1; $i < $length; $i++) {
                if ($array[$i] < $pivot) {
                    $left[] = $array[$i];
                } else {
                    $right[] = $array[$i];
                }
            }
    
            return array_merge(
                quickSort($left), 
                array($pivot), 
                quickSort($right)
            );
        }
    }
?>