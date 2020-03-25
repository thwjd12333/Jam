
    <head>
    
        <meta charset="UTF-8">
       
        <script>
            jQuery(function ($) {
                $("#boardDataTable").DataTable({
                    "language": {
                        "decimal": "",
                        "emptyTable": "표에서 사용할 수있는 데이터가 없습니다.",
                        "info": "총 _TOTAL_명   _START_에서 _END_까지 표시",
                        "infoEmpty": "0 개 항목 중 0 ~ 0 개 표시",
                        "infoFiltered": "(_MAX_ 총 항목에서 필터링 됨)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "_MENU_ 개씩 보기",
                        "loadingRecords": "로드 중 ...",
                        "processing": "처리 중 ...",
                        "search": "검색:",
                        "zeroRecords": "일치하는 레코드가 없습니다.",
                        "paginate": {
                            "first": "처음",
                            "last": "마지막",
                            "next": "다음",
                            "previous": "이전"
                        },
                        "aria": {
                            "sortAscending": ": 오름차순으로 정렬",
                            "sortDescending": ": 내림차순으로 정렬"
                        }
                    }

                });
            });
        </script>       
    </head>
    <body>
        <article class="post">
            <div class="container">

                <div class="topList">
                    <ol>
                        <li>
                            <a herf="index.html">메인</a>
                        </li>
                        <i class="arrow fas fa-chevron-right"></i>
                        <li>
                            <a href="#">게시판</a>
                        </li>
                    </ol>
                </div>

                <h1>즐거운 게시판</h1>
                <p>다양한 의견들을 올려주세요!
                </p>
                <div class="boardtable">                   
                    <table id="boardDataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>작성자</th>
                                <th>게시글</th>
                                <th>날짜</th>
                                <th>수정/삭제</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($boards as $board): ?>
                            <tr>
                                <td>
                                    <a
                                        href="mailto:<?php echo htmlspecialchars($board['email'],ENT_QUOTES,'UTF-8'); ?>">
                                        <?php echo htmlspecialchars($board['name'],ENT_QUOTES,'UTF-8'); ?></a>
                                </td>
                                <td><?= htmlspecialchars($board['boardtext'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=$board['boarddate']?></td>
                                <td>
                                    <input
                                        type="button"
                                        onclick="location.href='index.php?action=edit&id=<?=$board['id']?>'"
                                        value="수정"></input>
                                    <form action="index.php?action=delete" method="post">
                                        <input type="hidden" name="id" value="<?php echo $board['id']?>">
                                        <input type="submit" value="삭제">
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="button">
                        <input type="button" value="게시글 등록" onclick="location.href = 'index.php?action=edit'">
                    </div>
                </div>
            </div>
        </article>


    </body>      
  
