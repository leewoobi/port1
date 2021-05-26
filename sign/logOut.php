<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="leeraincoat">
    <title>Portfolio</title>
    
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/php.css">
    
      <!-- webfonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
</head>
<body>
   
<?php
	        session_start();
            include '../component/header.php';
        ?>
    <!-- //header -->
    <!-- //header -->
    
    <main>
        <!-- mainCont -->
        <section id="signUpCont">
        <?php

            unset($_SESSION['memberID']);
            unset($_SESSION['youNickName']);
            echo "<div class='main-cont'><p>로그아웃 되었습니다.</p><a href='../index.html'>메인 페이지로 이동하기</a></div>";
            return;

        ?>
        </section>
        <!-- //mainCont -->
    </main>
    

</body>
</html>
