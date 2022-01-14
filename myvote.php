<?php
   require_once 'db.php';
   $id=$_SESSION['id'];

   $sql  = "select bdate,applyid,title,rate,sdate,num,prmk from vote where applyid='$id' order by sdate";
   $result =$db->query($sql);
   while ($row=$result->fetchRow()){
      $bdate=$row[0];
      $applyid=$row[1];
      $title=$row[2];
      $rate=$row[3];
      $sdate=$row[4];
      $prmk=$row[6];
      $sql1  = "select count(*) from msg where fprmk=$prmk";
      $result1 =$db->query($sql1);
      $row1=$result1->fetchRow();
      $num=$row1[0];
      $st.="<tr>
      <th scope='row'>$sdate</th>
      <td>$applyid</td>
      <td>
        <a href='thevote.php?prmk=$prmk' class='yu'>$title</a>
      </td>
      <td>$num</td>
    </tr>\n
";
   }
?>
<!-- 投票列表 -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.79.0">
    <title>VOTE</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<link class="icon" rel="icon" href="./img/vava.ico">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/style.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <script src="js/chart.js"></script>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid aabc">
    <a class="navbar-brand" href="mainvote.php">投票網站</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
	<li class="nav-item active">
          <a class="nav-link" aria-current="page" href="mainvote.php">&nbsp;回到投票列表&nbsp;</a>
	</li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<main class="container-fluid">
  <div class="bg-light p-3 rounded">
  <h1>我創建的投票</h1>
  </div>
</main>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <!-- 標題 -->
      <th scope="col">截止日期</th> 
      <th scope="col">發起人</th>
      <th scope="col">主題</th>
      <th scope="col">投票人數</th>
    </tr>
  </thead>
  <tbody>
    <!-- 內容 -->
  <?php echo $st;?> 
  </tbody>
</table>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
