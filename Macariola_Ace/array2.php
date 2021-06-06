<?php
 // Sort the array in ascending order, if the value is odd, round it in nearest 10ths
 // [9863,7127,2020,80,131,55,100]

 function ArrangeArray($array) {

	// sort array values in ascending order
        asort($array);
        // check the values if its odd, round it to the nearest 10ths
        foreach ($array as $num)
	{
	  if($num% 2 == 1) {
	     $value = round($num, -1);
          }
          else {
             $value = $num;
          }
          echo $value.",";
        }
 }

 // Test the code
 $array = array(9863,7127,2020,80,131,55,100);
 ArrangeArray($array);

?>
