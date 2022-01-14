<?php
   $prmk=$_GET['prmk'];

   require_once 'db.php';

   $sql  = "delete from member where prmk=$prmk";
   $result =$db->query($sql);//執行sql

    header("Location:login.html");
?>
