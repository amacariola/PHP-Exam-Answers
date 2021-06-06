<?php
  // Display the item that is not repetitive
  // ['red','blue','black','red','blue','red','gold']

  function notRepetitive($array) {

	foreach ($array as $value) {
	    $arr[$value][] = 1;
	}

	foreach($arr as $a => $b) {
	    if(count($b) == 1) {
		$o[] = $a;
	    }
        }
        print_r($o);
  }
  
  // Test the code
  $array = array('red','blue','black','red','blue','red','gold');
  notRepetitive($array);  

?>
