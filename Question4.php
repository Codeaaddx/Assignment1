<?php

//Question 4 (Use a php online compiler to enter STDIN (example: Thank you for your comment and your participation))

$string = trim(fgets(STDIN));
$array = explode(' ', $string);
$array1 = array_count_values($array);
$word = array_search(max($array1), $array1);
$word1 = ''; 
foreach ($array as $s) {
    if (strlen($s) > strlen($word1)) {
        $word1 = $s;
    }
} 
printf("%s %s\n", $word, $word1);

?>
