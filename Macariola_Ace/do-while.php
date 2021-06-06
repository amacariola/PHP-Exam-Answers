<?php
# Creata a PHP function using DO WHILE that will display odd numbers from 0-10
 function Oddnums() {
   $num = 1;
   do {
 	if($num % 2 == 1) {
 	   echo $num.",";
 	}
        $num ++;
   } while ($num <= 10);
 }
 echo "Odd numbers are ", Oddnums();

?>
