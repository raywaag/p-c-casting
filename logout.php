<!--Logout Form-->
<?php
   session_start();

   if(session_destroy()) {
      header("Location: page_index.php");
   }
?>