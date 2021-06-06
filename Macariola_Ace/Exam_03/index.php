<?php

  // PHP function that checks if the number is a fibonacci number
  
  // helper function to check if num is a perfect square	
  function PerfectSquare($a) {
     $b = (int) (sqrt($a));
     return ($b * $b == $a);
  }
 
  // fibonacci function 
  function Fibonacci($n) {
     return PerfectSquare(5 * $n * $n + 4) || 
            PerfectSquare(5 * $n * $n - 4);
  }

  // lets test the  code
  for ($i = 1; $i <= 10; $i++) 
	if(Fibonacci($i)) {
	     echo "$i is a Fibonacci number\n";
        }
        else {
	     echo "$i is not a Fibonacci number\n";
        } 
 
?>
