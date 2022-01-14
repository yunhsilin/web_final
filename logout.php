<?php

   require_once 'db.php';

   unset($_SESSION['cname']);
   unset($_SESSION['id']);
   unset($_SESSION['power']);

   header("Location:login.html");
?>
