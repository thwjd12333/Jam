<article class="post">
    <div class="container">

        <div class="topList">
            <ol>
                <li>
                    <a herf="index.php">메인</a>
                </li>
                <i class="arrow fas fa-chevron-right"></i>
                <li>
                    <a href="boards.php">게시판</a>
                </li>
                <i class="arrow fas fa-chevron-right"></i>
                <li>
                    <a href="#">게시글 입력</a>
                </li>
            </ol>
        </div>

        <h1>게시글 입력</h1>
        <p>원하는 내용을 자유롭게 적어주세요</p>
        <div class="boardcon">
            <form action="" method="post">
                <input type = "hidden" name = "board[id]" value = "<?=$board['id'] ?? ''?>">
                <h3>게시글을 입력해주세요 :</h3>
                <textarea id="boardtext" name="board[boardtext]" rows="10" cols="60" resize = "none"><?= $board['boardtext'] ?? '' ?></textarea>

                 
                <input type="submit" name="submit" value="저장">
              </form>
            </div>
        </div>
    </div>
</article>