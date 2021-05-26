<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="webstoryboy">
    <meta name="description" content="웹스토리보이 포트폴리오 사이트입니다.">
    <meta name="keywords" content="웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이">
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
    <?php
            include '../component/header.php';
        ?>
    <!-- //header -->
    
    <main>
        <!-- mainCont -->
        <section id="signup-cont">

                <div class="signup">
                    <h2><strong>SingUp</strong></h2>
                    <form name="signUp" method="post" action="signUpSave.php">
                        <div>
                            <label for="userEmail" class="sr-only">Mail</label> 
                            <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="Mail" required autofocus>
                        </div>
                        <div>
                            <label for="userName" class="sr-only">Name</label>
                            <input type="text" name="userName" id="userName" class="input-text" placeholder="Name" required>
                        </div>
                        <div>
                            <label for="userNickName" class="sr-only">NickName</label>
                            <input type="text" name="userNickName" id="userNickName" class="input-text" placeholder="NickName" required>
                        </div>
                        <div>
                            <label for="userPw" class="sr-only">Password</label>
                            <input type="password" name="userPw" id="userPw" class="input-text" placeholder="Password" required>
                        </div>
                        
                        <div class="birth">
                            <div>
                                <label for="birthYear">year</label>
                                <select id="birthYear" name="birthYear" required>
                                    <?php
                                        $thisYear = date('Y', time());

                                        for($i = $thisYear; $i >= 1930; $i--) {
                                            echo "<option value='{$i}'>{$i}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="birthMonth">month</label>
                                <select id="birthMonth" name="birthMonth" required>
                                    <?php
                                        for($i = 1; $i <= 12; $i++) {
                                            echo "<option value='{$i}'>{$i}</option>";
                                        }
                                    ?>               
                                </select>
                            </div>
                            <div>
                                <label for="birthDay">day</label>
                                <select id="birthDay" name="birthDay" required>
                                    <?php
                                        for($i = 1; $i <= 31; $i++) {
                                            echo "<option value='{$i}'>{$i}</option>";
                                        }
                                    ?>              
                                </select>
                            </div>
                        </div>
                        <button class="signup-btn" type="submit" value="회원가입">sing Up</button>
                        <p class="signDesc"><a href="logIn.php">login</a></p>
                      
                    </form>
    
            </div>
        </section>
        <!-- //mainCont -->
    </main>
    
</body>
</html>