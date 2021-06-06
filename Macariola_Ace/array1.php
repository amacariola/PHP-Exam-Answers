<?php
# Arrays
# Display the value that has the most number of occurence in case of tie arrange in alphabetical order
# ["Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian"]

  function MostOccurence() {
	  $names = array("Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian");
          $values = array_count_values($names);
          arsort($values);
          $popular = array_keys($values);
          return $popular[0][1];
  }

  echo MostOccurence();

?>
