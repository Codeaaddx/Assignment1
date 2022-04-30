<?php

//Question 5

function get_odd(...$num){
    foreach ($num as $value) {
        if($value % 2 == 1) {
            extract (array($value));
            print_r (array($value));
        }
    } 
 }
  get_odd(4, 2, 5, 1, 3, 10);

?>