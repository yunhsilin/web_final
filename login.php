<?php
   $email=$_POST['email'];
   $passwd=$_POST['passwd'];

   require_once 'db.php';

   $sql  = "select cname,id,power from member where email='$email' and passwd='$passwd'";
   $result =$db->query($sql);//執行sql
   $row=$result->fetchRow();//回傳結果
   $cname=$row[0];
   $id=$row[1];
   $power=$row[2];

   $_SESSION['cname']=$cname;
   $_SESSION['id']=$id;
   $_SESSION['power']=$power;

   $num=$result->numRows();
   if ($num!=0){
	header("Location:mainvote.php");
   }else{
	header("Location:err.html");
   }
?>
