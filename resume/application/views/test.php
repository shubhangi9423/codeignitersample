<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	
   <body> 
      CodeIgniter View Example 

      <?php 
            echo "Records from database";
            foreach ($records as $r) {
               echo $r->uid."  ".$r->uname."  ".$r->lname;
            }
         ?> 
   </body>
	
</html>




