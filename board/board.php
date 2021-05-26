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
            <h2>Ask me</h2>
                <div class="listSearch">
                <form name="tableSearch" method="post" action="searchResult.php">
                        <filedset>
                            <legend class="sr-only">게시판 검색 영역입니다.</legend>
                            <input type="search" name="searchKeyword" class="form-search" placeholder="search everthing" aria-label="search" />
                            <select name="searchOption" id="searchOption" class="form-select">
                                <option value="title">title</option>
                                <option value="content">content</option>
                                <option value="tandc">title and content</option>
                                <option value="torc">title or content</option>
                            </select>
                            <button type="submit" class="form-btn">search</button>
                            <a type="button" class="form-btn black" href="writeBoard.html">wirte</a>
                        </filedset>
                    </form>
                </div>
                    <!-- //listSearch -->
                    <div class="listTable">
                    <table class="table">
                        <colgroup>
            								<col style="width: 10%;">
            								<col style="width: 65%;">
            								<col style="width: 10%;">
            								<col style="width: 15%;">
            						</colgroup>
                        <thead>
                            <tr>
                                <th scope="col">number</th>
                                <th scope="col">title</th>
                                <th scope="col">name</th>
                                <th scope="col">date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								
                                if(isset($_GET['page'])){
                                    $page = (int) $_GET['page'];
                                } else {
                                    $page = 1;
                                }

                                // LIMIT 0, 20  //(20 * 1) - 20 -> ($numView * $page) - $numView
                                // LIMIT 20, 20 //(20 * 2) - 20 -> ($numView * $page) - $numView
                                // LIMIT 40, 20 //(20 * 3) - 20 -> ($numView * $page) - $numView
                                $numView = 10;
                                $firstLimitValue = ($numView * $page) - $numView;


                                $sql = "SELECT b.boardID, b.title, m.youNickName, b.regTime FROM board b JOIN member m ON (b.memberID = m.memberID) ORDER BY boardID ";
                                $sql .= "DESC LIMIT {$firstLimitValue}, {$numView}";
                                $result = $dbConnect->query($sql);

                                if($result){
                                    $dataCount = $result->num_rows;

                                    if($dataCount > 0){
                                        for($i=0; $i<$dataCount; $i++){
                                            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
                                            echo "<tr>";
                                            echo "<td scope='row'>".$memberInfo['boardID']."</td>";
                                            echo "<td><a href='viewBoard.php?boardID={$memberInfo['boardID']}'>".$memberInfo['title']."</a></td>";
                                            echo "<td>".$memberInfo['youNickName']."</td>";
                                            echo "<td>".date('Y-m-d H:i', $memberInfo['regTime'])."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                } else {
                                    //게시글이 없을 경우
                                    echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
                                }

                            ?>
<!--
                            <tr>
                                <td>100</td>
                                <td>포트폴리오 사이트는 어떻게 만드나요?</td>
                                <td>웹스토리보이</td>
                                <td>2020-10-20 15:07</td>
                            </tr>
-->
                        </tbody>
                    </table>
                </div>
    <!-- pagination -->
<?php
    include 'pagination.php';
?>
<!-- //pagination -->
            </div>
        </div>
    </section>
    <!-- //boardCont -->
</main>

  
 
    </div>

</body>
</html>