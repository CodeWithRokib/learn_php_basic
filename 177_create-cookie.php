<?php

$cookie_name = "user";
$cookie_value = "Robeen Priom";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<html>
   <body>
      <?php
      if(!isset($_COOKIE["user"])){
         echo "Cookie is not set";
      }
      else{
         echo $_COOKIE["user"];
      }
      ?>
   </body>
</html>