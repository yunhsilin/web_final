<?php
   require_once 'db.php';
   $sql  = "select id,cname,email,prmk from member where id='".$_SESSION['id']."'";
   $result =$db->query($sql);
   $row=$result->fetchRow();
   $id=$row[0];
   $cname=$row[1];
   $email=$row[2];
   $prmk=$row[3];
?>
<!-- 帳號內容 -->
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

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">    <script src="https://kit.fontawesome.com/ab0d49feca.js" crossorigin="anonymous"></script>

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
              <!-- 頂部列表 -->
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
    <h1>&nbsp;&nbsp;帳號內容</h1>
  </div>
</main>
<div class="container">
    <main class="form-content">
        <label for="outputpicandcname">
            <!-- 頭像 -->
            <img class="mb-4" src="img/2633926.png" alt="" width="172" height="157">
	    <p class="pointcname conp">暱稱：<?php echo $id;?></p>
	    <p class="pointgender conp">姓名：<?php echo $cname;?></p>
            <!-- 以下是性別圖標
            <i class="fas fa-female"></i>
            <i class="fas fa-male"></i>
            <i class="fas fa-question-circle"></i> -->
	    <p class="pointemail conp">信箱：<?php echo $email;?></p>
            <?php if ($_SESSION['power']!=1){?>
	    <p><a href="delmember.php?prmk=<?php echo $prmk;?>">刪除帳號</a></p>
            <?php }?>
        </label>
    </main>
    
</div>


      
</body>
</html>
