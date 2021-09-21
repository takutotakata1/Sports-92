<?php
if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}
if($_SESSION['loginauth']=='true'){
  header("Location: private/main.php");
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ログインページ">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.css" />
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../vendor/animsition.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../vendor/marker-animation.js"></script>
  <script src="../vendor/aimsition.js"></script>
  <script type="module" src="../scripts/login.js"></script>
  <script src="../scripts/main.js"></script>

  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
    
  <link rel="icon" href="../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/logo.png">
  <title>ログイン</title>
</head>

<body class="animsition">
  <div id="nav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="toppage.html" class="animsition-link"><img class="logo" src="../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>ロ</span>グイン</h1>
      <div class="description">
        <h2>※学校用Googleアカウントでログインしてください。</h2>
        <h2>※もし間違えたアカウントでログインしてしまった場合は、他のブラウザを使用してログインし直すようにしてください。</h2>
      </div>
    </div>
    <div id="logincontainer"></div>
    <div id="auth"></div>
    <p>あああ</p>
  </div>
</body>

</html>
