<?php
   $prmk=$_GET['prmk'];
   require_once 'db.php';
   $sql  = "select bdate,applyid,title,rate,sdate,num,prmk from vote where prmk=$prmk";
   $result =$db->query($sql);
   $row=$result->fetchRow();
   $bdate=$row[0];
   $applyid=$row[1];
   $title=$row[2];
   $rate=$row[3];
   $sdate=$row[4];
   $num=$row[5];
   $prmk=$row[6];

   $sql  = "select sdate,id,content,vote from msg where fprmk=$prmk";
   $result =$db->query($sql);
   while ($row=$result->fetchRow()){
      $k++;
      $pdate=$row[0];
      $id=$row[1];
      $content=$row[2];
      $vote=$row[3];
      $st.="
              <tr>
                <th scope='row'>$pdate</th>
                <td>$id</td>
                <td>$vote</td>
                <td>$content</td>
              </tr>
      ";
   }
   $sql  = "select count(*) from msg where fprmk=$prmk and vote='贊成'";
   $result =$db->query($sql);
   $row=$result->fetchRow();
   $votenum=$row[0];
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
    <h1>&nbsp;&nbsp;投票主題名稱</h1>
  </div>
</main>
<div class="container conbo">
<p>發起人：<?php echo $applyid;?></p>
<p>投票詳細內容：<?php echo $title;?></p>
<p>多少參與此投票：<?php echo $k;?></p>
    <label for="outputopnion">
        <p>投票者留言：</p>
        <table class="table table-hover">
            <thead>
              <tr>
                <!-- 標題 -->
                <th scope="col">留言日期</th> 
                <th scope="col">帳號</th>
                <th scope="col">意見</th>
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
    
    <br>

    <form action="addmsg.php" method="post">
	<label for="inputopnion">
	<?php if ($_SESSION['power']==1){?>
	<p><a href="delvote.php?prmk=<?php echo $prmk;?>" class="twobtn">刪除此投票</a></p>
        <?php } ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <canvas id="myChart" ></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie', //圖表類型
  data: {
    //標題
    labels: ['不贊成', '贊成'],
    datasets: [{
      label: '# test', //標籤
	      data: [<?php echo $k-$votenum;?>, <?php echo $votenum;?>], //資料
      //圖表背景色
      backgroundColor: [
        'rgba(255, 0, 0, 0.5)',
        'rgba(0, 255, 0, 0.5)'
      ],
      //圖表外框線色
      borderColor: [
        'rgba(255, 0, 0, 1)',
        'rgba(0, 255, 0, 1)'
      ],
      //外框線寬度
      borderWidth: 1
    }]
  },
  // options: {
  //   scales: {
  //     yAxes: [{
  //       ticks: {
  //         beginAtZero: true,
  //         responsive: true //符合響應式
  //       }
  //     }]
  //   }
  // }
});
      </script>
	<p>發表意見：</p>
        <select name="vote">
        <option selected>贊成</option>
	<option>不贊成</option>
        </select>
	<input type="text" name="content">
    </label>
    <button class="w-100 btn v btn-primaryd chan" type="submit">送出留言</button>

    </form>
    
    
    </form>
  
</div>


      
</body>
</html>
