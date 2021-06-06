<?php
 
  // Checks if the input string is a palindrome
  function Palindrome($string) {
	  echo "Input Sting: ",$string;
          // use the built-in strrev function 
	  $reverse = strrev($string);
          // return the reversed string
	  echo "\nString reversed: ".$reverse;
          // if reversed string is equal to the input string it prints 'string is a palindrome'
	  if ($string == $reverse) {
		  echo "\n".$string, ' is a palindrome';
	  }
          // otherwise
	  else {
		  echo "\n".$string, ' is not a palindrome';
          }
  }

  // Test the code
  echo Palindrome("radar"),"\n";
  // if you want to put user input
  $input = readline("Enter String: ");
  Palindrome($input);


?>
