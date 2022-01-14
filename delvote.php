<?php
   $prmk=$_GET['prmk'];

   require_once 'db.php';

   $sql  = "delete from vote where prmk=$prmk";
   $result =$db->query($sql);//執行sql
   $sql  = "delete from msg where fprmk=$prmk";
   $result =$db->query($sql);//執行sql

    header("Location:mainvote.php");
?>
