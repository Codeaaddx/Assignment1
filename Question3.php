<?php

//Question 3

 for ($i = 1; $i <= 100; $i++)
 {
   if ( $i%3 == 0 && $i%7 == 0 )
    {
      echo " FizzBuzz"."<br>";
    }
   else if ( $i%3 == 0 ) 
    {
      echo " Fizz"."<br>";
    }
      else if ( $i%7 == 0 ) 
    {
      echo " Buzz"."<br>";
    }
      else
    {
      echo $i."<br>";
    }
  }
?>
