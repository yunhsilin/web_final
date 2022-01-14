<?php
   require_once 'db.php';
   if ($_SESSION['power']==1){
      $sql  = "select sdate,id,content from adminmsg order by prmk desc";
      $msg='所有留言(<mark>管理者權限</mark>)';
   }else{
      $sql  = "select sdate,id,content from adminmsg where id='".$_SESSION['id']."'order by prmk desc";
      $msg='我的留言';
   }
   $result =$db->query($sql);
   while ($row=$result->fetchRow()){
      $k++;
      $pdate=$row[0];
      $id=$row[1];
      $content=$row[2];
      $st.="
              <tr>
                <th scope='row'>$pdate</th>
                <td>$id</td>
                <td>$content</td>
              </tr>
      ";
   }
   $_SESSION['fprmk']=$prmk;
?>
<!-- 每個投票的網頁 -->
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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/style.css">

<link class="icon" rel="icon" href="./img/vava.ico">

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
      mark{
         background-color:#FF0;
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
    <h1 class="nott">聯絡管理員</h1>
    <h6 class="nott">(使用者留言僅管理員可看見)</h6>
  </div>
</main>
<div class="container conbo">
    <label for="outputopnion">
    <p><?php echo $msg;?>：</p>
        <table class="table table-hover">
            <thead>
              <tr>
                <!-- 標題 -->
                <th scope="col">留言日期</th> 
                <th scope="col">帳號</th>
                <th scope="col">內容</th>
              </tr>
            </thead>
            <tbody>
              <!-- 內容 -->
            <?php echo $st;?> 
            </tbody>
          </table>
    </label>
    <br>
    <form action="addadminmsg.php" method="post">
        <label for="inputopnion">
        <p>發表意見：</p>
	<input type="text" name="content">
    </label>
    <button class="w-100 btn v btn-primaryd chan" type="submit">送出留言</button>

    </form>
    
    
    </form>
  
</div>


      
</body>
</html>
