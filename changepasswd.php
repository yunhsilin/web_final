<!-- 更改密碼 -->
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
    <h1>&nbsp;&nbsp;修改密碼</h1>
  </div>
</main>
<div class="container conbo">
    <form action="chgpwd.php" method="post">
        <label for="oldpasswd">
            <p class="chapd">原本的密碼：</p>
            <input type="password" class="nott" name="old">
        </label>
        <br>
        <br>
        <label for="newpasswd">
            <p class="chapd">新密碼：</p>
            <input type="password" class="nott" name="new1">
        </label>
        <br>
        <br>
        <label for="newpasswd">
            <p class="chapd">確認新密碼：</p>
            <input type="password" class="nott" name="new2">
        </label>
        <br>
        <button class="w-100 btn v btn-primaryd chan" type="submit">確定更改密碼</button>

      <!-- <label for="inputtheme">
        <p class="xin">主題：</p>
        <input type="text" name="theme">
      </label>
      <br>
      <label for="inputcontent">
        <p class="xin">內容闡述：</p>
        <input type="text" name="content">
      </label>
        <br>
        <label for="inputstartvote">
          <p class="xin">開始投票日期：</p>
          <input type="datetime-local" name="startvote">
        </label>
        <br>
        <label for="inputendvote">
          <p class="xin">截止投票日期：</p>
          <input type="datetime-local" name="endvote">
        </label>
        <br>
        <button class="w-100 btn v btn-primaryd" type="submit">確定送出</button> -->
    </form>
  
</div>


      
</body>
</html>
