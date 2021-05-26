<header id="header">
        <nav class="nav">
            <ul>
                <li class="strong" >
                  <a href="http://leeraincoat.dothome.co.kr/port/index.html" 
                    data-0="color:rgb(0, 0, 0);" 
                    data-1100="color:rgb(0, 0, 0);"
                    data-1200 ="color:rgb(255, 255, 255);"
                    data-1300 ="color:rgb(255, 255, 255);"
                    data-1800 ="color:rgb(0, 0, 0);"
                    data-13800="color: rgb(0, 0, 0);"
                    data-14000="color: rgb(255, 255, 255);"
                    data-15100="color: rgb(255, 255, 255);" 
                    data-15600="color: rgb(0, 0, 0);">portfolio</a></li>
                <li>
                   <a href="javascript:window.scrollTo(0,1200);"
                      data-0="color:rgb(0, 0, 0);" 
                      data-1100="color:rgb(0, 0, 0);"
                      data-1200 ="color:rgb(255, 255, 255);"
                      data-1300 ="color:rgb(255, 255, 255);"
                      data-1800 ="color:rgb(0, 0, 0);"
                      data-13800="color: rgb(0, 0, 0);"
                      data-14000="color: rgb(255, 255, 255);"
                      data-15100="color: rgb(255, 255, 255);" 
                      data-15600="color: rgb(0, 0, 0);">about</a></li>
                <li>
                   <a href="javascript:window.scrollTo(0,4000);"
                      data-0="color:rgb(0, 0, 0);" 
                      data-1100="color:rgb(0, 0, 0);"
                      data-1200 ="color:rgb(255, 255, 255);"
                      data-1300 ="color:rgb(255, 255, 255);"
                      data-1800 ="color:rgb(0, 0, 0);"
                      data-13800="color: rgb(0, 0, 0);"
                      data-14000="color: rgb(255, 255, 255);"
                      data-15100="color: rgb(255, 255, 255);" 
                      data-15600="color: rgb(0, 0, 0);">site</a></li>
              <li>
                 <a href="javascript:window.scrollTo(0,13400);"
                    data-0="color:rgb(0, 0, 0);" 
                    data-1100="color:rgb(0, 0, 0);"
                    data-1200 ="color:rgb(255, 255, 255);"
                    data-1300 ="color:rgb(255, 255, 255);"
                    data-1800 ="color:rgb(0, 0, 0);"
                    data-13800="color: rgb(0, 0, 0);"
                    data-14000="color: rgb(255, 255, 255);"
                    data-15100="color: rgb(255, 255, 255);" 
                    data-15600="color: rgb(0, 0, 0);">css</a></li>
              <li>
                 <a href="javascript:window.scrollTo(0,16800);"
                    data-0="color:rgb(0, 0, 0);" 
                    data-1100="color:rgb(0, 0, 0);"
                    data-1200 ="color:rgb(255, 255, 255);"
                    data-1300 ="color:rgb(255, 255, 255);"
                    data-1800 ="color:rgb(0, 0, 0);"
                    data-13800="color: rgb(0, 0, 0);"
                    data-14000="color: rgb(255, 255, 255);"
                    data-15100="color: rgb(255, 255, 255);" 
                    data-15600="color: rgb(0, 0, 0);">javascript</a></li>
              <li>
                 <a href="javascript:window.scrollTo(0,29800);"
                    data-0="color:rgb(0, 0, 0);" 
                    data-1100="color:rgb(0, 0, 0);"
                    data-1200 ="color:rgb(255, 255, 255);"
                    data-1300 ="color:rgb(255, 255, 255);"
                    data-1800 ="color:rgb(0, 0, 0);"
                    data-13800="color: rgb(0, 0, 0);"
                    data-14000="color: rgb(255, 255, 255);"
                    data-15100="color: rgb(255, 255, 255);" 
                    data-15600="color: rgb(0, 0, 0);">contact</a></li>
            </ul>
            <ul>
            <?php if(!isset($_SESSION['memberID'])){ ?>
                <li><a href="http://leeraincoat.dothome.co.kr/port/sign/signUp.php">sign up</a></li>
                <li><a href="http://leeraincoat.dothome.co.kr/port/sign/logIn.php">login</a></li>
            <?php } else { ?>
                <li><a href="#"><?=$_SESSION['youNickName']?>Well come</a></li>
                <li><a href="http://leeraincoat.dothome.co.kr/port/sign/logOut.php">logout</a></li>
            <?php } ?>   
              <li> <a href="http://leeraincoat.dothome.co.kr/port/board/writeBoard.php">write</a></li>   
              <li> <a href="http://leeraincoat.dothome.co.kr/port/board/board.php"> board</a> </li>     
            </ul>
        </nav>
    </header>