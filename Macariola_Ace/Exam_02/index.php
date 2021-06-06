<?php

//creates a seperate PHP file when executed on the browser

  function helloThere() {
         // Create a new file named 'hello_there.php' with write permissions
 	 $newfile = fopen("hello_there.php","w") or die("Cant open file");
         // lets use the multiline print in PHP
 	 $text = <<<EOL
         <?php

         // This is a comment
 
          echo "This is a test page!";
          echo "Exam number two!";

         // This is the end of a comment

         ?>
         EOL;

         // Write thru the file and close it
         fwrite($newfile,$text);
         fclose($newfile);
  }

  helloThere();

?>
