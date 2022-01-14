<?php
   $title=$_POST['theme'];
   $content=$_POST['content'];
   // $bdate=$_POST['startvote'];
   $sdate=$_POST['endvote'];

   require_once 'db.php';
   $id=$_SESSION['id'];
   $sql  = "insert into vote(title,content,sdate,applyid,ptime) values('$title','$content','$sdate','$id',NOW());";
   $result =$db->query($sql);//執行sql
   header("Location:mainvote.php");
?>
