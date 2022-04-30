 
<?php

//Question 1

function armstrong_number($number) {
    $string_length = strlen($number);
    $total = 0;
    $number = (string)$number;
    for ($i = 0; $i < $string_length; $i++) {
      $total= $total + pow((string)$number{$i},$string_length);
    }
    if ((string)$total == (string)$number) {
      return "True";
    } else {
      return "False";
    }
}

    echo armstrong_number(153);
    echo armstrong_number(407);
    echo armstrong_number(111);


?>