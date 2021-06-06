<?php 
  // create a PHP function that shows the difference of two given dates in years/month/days format

  function DateDifference($date1,$date2) {
	$date_1 = strtotime($date1);
        $date_2 = strtotime($date2);
        
        // Find the difference 
        $difference = abs($date_2 - $date_1);

        // Find the year difference
        $years = floor($difference / (365 * 60 * 60 * 24));
      
        // Find the months difference
        $months = floor(($difference - $years * 365 * 60 * 60 * 24 ) /
		  (30 * 60 * 60 * 24));

        // Find the day difference
        $days = floor(($difference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 ) /
		  (60 * 60 * 24));
        
        return printf("\n%d years, %d months, %d days", $years,$months,$days);
  }
  
  // test the function by putting user input
  $date1 = readline("Enter first date in YY-MM-DD format: ");
  $date2 = readline("\nEnter second date in YY-MM-DD format: ");
  DateDifference($date1,$date2);

?>
