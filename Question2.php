<?php

//Question 2

function remove_duplicates($list){
    $list_unique = array_values(array_unique($list));
    return $list_unique ;
}

$list = array(1,1,2,2,3,4,5,5);
    print_r(remove_duplicates($list));
    


?>