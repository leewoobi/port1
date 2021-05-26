
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

        <!--
            1. 게시판 테이블 만들기
            2. 게시판 등록 페이지(writeBoard.php)
            3. 게시판 데이터 저장 페이지(saveBoard.php)
            4.게시판 데이터 불러오기 페이지(board.php)
    -->
        <?php
            include '../component/header.php';
        ?>
        <!-- //header -->

        <main id="main">
            <!-- boardCont -->
            <section id="boardCont">
                <div class="container">
                <div class="listBoard">
                    <h2>View Board</h2>
                    <div class="listTable">
                        <table class="table">
                            <colgroup>
                                <col style="width: 20%">
                                <col style="width: 80%">
                            </colgroup>
                            <tbody>

                            <?php
								if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
                                    $boardID = $_GET['boardID'];
                                    
							    	$sql = "SELECT b.title, b.content, m.youNickName, b.regTime FROM board b JOIN member m ON (b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
                                    $result = $dbConnect -> query($sql);
                                    
							    	if( $result ){
							    		$memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                        echo "<tr><th>제목</th><td class='left'>".$memberInfo['title']."</td></tr>";
                                        echo "<tr><th>글쓴이</th><td class='left'>".$memberInfo['youNickName']."</td></tr>";
                                        echo "<tr><th>등록일</th><td class='left'>".date('Y-m-d H:i', $memberInfo['regTime'])."</td></tr>";
                                        echo "<tr><th class='height'>내용</th><td class='left'>".$memberInfo['content']."</td></tr>";
							    	}
							    }
                            ?>
                          


                                <!--<tr>
                                    <th>제목</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>등록자</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>등록일</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>내용</th>
                                    <td>sdf</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>

                    <div class="listSearch">
                        <a class="form-btn black mt20" href="board.php">목록보기</a>
                    </div>
                    <!-- //listTable -->
                </div>
                </div>
            </section>
            <!-- //boardCont -->
        </main>
        <!-- //main -->
        <!--//main -->
    </div>
    <!-- //wrap -->
</body>
</html>