<?php
   $email=$_POST['email'];
   $passwd=$_POST['passwd'];
   $id=$_POST['id'];
   $cname=$_POST['cname'];

   require_once 'db.php';

   $sql  = "insert into member(email,cname,id,passwd) values('$email','$cname','$id','$passwd')";
   $result =$db->query($sql);//執行sql
   $cname=$row[0];
   $id=$row[1];
   $power=$row[2];

   $_SESSION['cname']=$cname;
   $_SESSION['id']=$id;

    header("Location:login.html");
?>
