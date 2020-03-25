<!DOCTYPE html>
<html lang="ko">

    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        <meta name="viewport" content="width = devic-width, initaial-scale=1.0">
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat"
            rel="stylesheet">

        <script src="https://kit.fontawesome.com/b664d7c580.js">
            /*아이콘*/
        </script>     
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>  
        <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
        <script>
            $(function () {
                $(".headBtn").click(function () {
                    $(".headNav").slideToggle();
                });
            });
        </script>

        <link rel="stylesheet" href="style.css">
    </head>

    <body class="nohero">
        <header>
            <div class="container">
                <div class="container-small">
                    <a href="index.php" class="headIcon">
                        <img src="img/JamICON.png" alt="" 	!important;>
                    </a>

                    <button type="button" class="headBtn">
                        <span class="fa fa-bars" title=""></span>
                    </button>
                </div>

                <nav class="headNav">
                    <ul>
                        <li>
                            <a href="index.php">메인</a>
                        </li>
                        <li>
                            <a href="index.php?action=about">소개</a>
                        </li>
                        <li>
                            <a href="index.php?action=recipe">레시피</a>
                        </li>
                        <li>
                            <a href="index.php?action=contact">문의</a>
                        </li>
                        <li>
                            <a href='index.php?action=list'>게시판</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <?= $output?>
        </main>
        <footer>
            <div class="container">

                <div class="footComName">
                    <h2>MARO NIYE</h2>
                    <p>
                        주소: OO시 OO동<br>
                        <a href="http://Maro_Niye.nett/">http://Maro_Niyeger.nett/</a>
                    </p>
                </div>

                <nav class="footAbout">
                    <div>
                        <h3>ABOUT</h3>
                        <ul>
                            <li>
                                <a href="about.php">설립</a>
                            </li>
                            <li>
                                <a href="contact.php">주소</a>
                            </li>
                            <li>
                                <a href="contact.php">지도</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3>SUPPORT</h3>
                        <ul>
                            <li>
                                <a href="about.php">소개</a>
                            </li>
                            <li>
                                <a href="recipe.php">레시피</a>
                            </li>
                            <li>
                                <a href="contact.php">문의</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="footCopyright">
                    ⓒ MARONIYE corp. ALL rights reserved.
                </div>
            </div>
        </footer>
    </body>