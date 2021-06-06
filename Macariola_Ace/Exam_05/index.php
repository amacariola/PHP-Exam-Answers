<?php
 // PHP function that returns the reversed form of a string e.g Car to raC

 function reverse($str) {
        // use the built-in strrev method to reverse the string 
	$reversed_string = strrev($str);
        // return the reversed string
        return $reversed_string;
 }
 
 // Test the code
 echo "Car\n";
 echo "Reversed: ",reverse("Car");

?>
