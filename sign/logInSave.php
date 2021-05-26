<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site | 로그인</title>

    <!-- CSS -->
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
            session_start();
            include '../component/header.php';
        ?>
        <!-- //header -->

        <main id="main">
            <section id="login-cont">
            <?php
                    include '../connect/connect.php';
                    include '../connect/session.php';

                    $userEmail = $_POST['userEmail'];
                    $userPW = $_POST['userPW'];
        
                    function goSignUpPage($alert){
                        echo "<div class='signInfo'><p>{$alert}</p></div>";
                        return;
                    }
                    
                    //이메일 검사
                    if( !filter_Var($userEmail, FILTER_VALIDATE_EMAIL) ){
                        goSignUpPage("이메일이 잘못되었습니다. <br> 올바른 이메일을 적어주세요!");
                        exit;
                    }
                  
                    //비밀번호 검사
                    if($userPW == null || $userPW == ''){
                        goSignUpPage('비밀번호를 입력해 주세요.');
                        exit;
                    }

                    //데이터 입력 --> 데이터 검사 --> 데이터 보내기 
                    $sql = "SELECT youEmail, youPw, youNickName, memberID FROM member ";
                    $sql .= "WHERE youEmail = '{$userEmail}' AND youPw = '{$userPW}' ";

                    $result = $dbConnect -> query($sql);

                    if($result){
                        if( $result -> num_rows == 0 ){
                            goSignUpPage("로그인 정보가 일치하지 않습니다.");
                            exit;
                        } else {
                            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                            $_SESSION['memberID'] = $memberInfo['memberID'];
                            $_SESSION['youNickName'] = $memberInfo['youNickName'];
                            goSignUpPage("<a href =http://leeraincoat.dothome.co.kr/port/index.html>  wellcome  go  to main page cilck here </a>");
                        }
                    } else {
                        goSignUpPage("에러 발생 관리자에게 문의하세요555!");
                    }
                ?>
            </section>
        </main>
  
    </div>

</body>
</html>