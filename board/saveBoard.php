<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    //include '../connect/checkSession.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site | 게시판</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/php.css">

    <!-- webfonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
    <div id="wrap">
        
        <!-- header -->
        <?php
            include '../component/header.php';
        ?>
        <!-- //header -->

        <!-- 
            1. 게시판 테이블 만들기
            2. 게시판 등록 페이지(writeBoard.php)
            3. 게시판 데이터 저장 페이지(saveBoard.php)
            4. 게시판 데이터 불러오기 페이지(board.php)
         -->

        <main id="main">
            <section id="board-cont">
                <div class="container">
                    <div class="saveBoard">
                    <?php
                        $boardTitle = $_POST['boardTitle'];
                        $boardContent = $_POST['boardContent'];

                        if( $boardTitle != null && $boardTitle != '' ){
                            $boardTitle = $dbConnect -> real_escape_string($boardTitle);
                        }

                        if( $boardContent != null && $boardContent != '' ){
                            $boardContent = $dbConnect -> real_escape_string($boardContent);
                        }

                        $memberID = $_SESSION['memberID'];
                        $regTime = time();

                        $sql = "INSERT INTO board(memberID, title, content, regTime) VALUES('{$memberID}','{$boardTitle}','{$boardContent}','{$regTime}')";
                       $result = $dbConnect -> query($sql);

                       if($result){
                           echo "<div class='info'> 저장이 완료되었습니다. <a href='board.php'>게시판 목록으로 이동하기</a> </div>";
                           exit;
                       } else{
                            echo "<div> 저장이 실패되었습니다.<a href='writeBoard.php'>게시판 작성하기 </a></div>";
                            exit;
                       }
                    ?>
                    </div>
                </div>
            </section>
        </main>

    </div>

</body>
</html>