<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="leeraincoat">
    <title>Webstoryboy Portfolio</title>
    
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
   
<div id="wrap">

<!-- header -->
<?php
    include '../component/header.php';
?>
<!-- //header -->

<main id="main">
    <section id="login-cont">
        <div class="login">
            <h2><strong>Login</strong> </h2>
            <form name="logIn" method="post" action="logInSave.php">
                <fieldset>
                    <legend class="sr-only">로그인 영역입니다.</legend>
                    <div>
                        <label for="userEmail" class="sr-only">mail</label>
                        <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="Mail" required autofocus>
                    </div>
                    <div>
                        <label for="userPW" class="sr-only">password</label>
                        <input type="password" name="userPW" id="userPW" class="input-text" placeholder="Password" required>
                    </div>
                    <button class="login-btn" type="submit" value="로그인">login</button>
                    <p class="login-desc"> <a href="signUp.php">signUp</a></p>
                </fieldset>
            </form>
        </div>  
    </section>
</main>
<!-- //main -->
</div>


</body>
</html>