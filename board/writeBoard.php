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
                    <div class="writeBoard">
                        <h2>wirte board</h2>
                        <form action="saveBoard.php" name="boardWrite" method="post">
                            <fieldset>
                                <legend class="sr-only">게시판 작성 영역입니다.</legend>
                                <div>
                                    <label for="boardTitle">title</label>
                                    <input type="text" name="boardTitle" id="boardTitle" class="title-text" required autofocus placeholder="title" />
                                </div>
                                <div>
                                    <label for="boardContent">content</label>
                                    <textarea name="boardContent" id="boardContent" class="title-text" rows="13" required placeholder="content"></textarea>
                                </div>
                            </fieldset>
                            <button class="writeBoardBtn" type="submit" value="저장하기">save</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- //main -->
    </div>
    <!-- //wrap -->
</body>
</html>