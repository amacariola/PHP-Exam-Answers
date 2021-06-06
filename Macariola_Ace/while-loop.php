<?php
# Create a PHP function using WHILE loop that will sum all even numbers from 0-10

 function SumOfEven() {
   $SumEven = 0;
   $num  = 1;

   while ($num <=10) {
 	if($num % 2 == 0) {
 	    $SumEven += $num;
 	}
 	$num ++;
   }
   return $SumEven;
 }

 echo "Sum of even numbers from 0-10 is ",SumOfEven();

?>
