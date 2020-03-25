<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="UTF-8">
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
        <script
            src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
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
        <title></title>
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
                                        onclick="location.href='boardsedit.php? id=<?=$board['id']?>'"
                                        value="수정"></input>
                                    <form action="boardsdelete.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $board['id']?>">
                                        <input type="submit" value="삭제">
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="button">
                        <input type="button" value="게시글 등록" onclick="location.href = 'boardsedit.php'">
                    </div>
                </div>
            </div>
        </article>

        <script>
            var lang_kor = {
                "decimal": "",
                "emptyTable": "데이터가 없습니다.",
                "info": "_START_ - _END_ (총 _TOTAL_ 명)",
                "infoEmpty": "0명",
                "infoFiltered": "(전체 _MAX_ 명 중 검색결과)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "_MENU_ 개씩 보기",
                "loadingRecords": "로딩중...",
                "processing": "처리중...",
                "search": "검색 : ",
                "zeroRecords": "검색된 데이터가 없습니다.",
                "paginate": {
                    "first": "첫 페이지",
                    "last": "마지막 페이지",
                    "next": "다음",
                    "previous": "이전"
                },
                "aria": {
                    "sortAscending": " :  오름차순 정렬",
                    "sortDescending": " :  내림차순 정렬"
                }
            };
            // $(document).ready(function() {     $('#boardDataTable').DataTable( {
            // data: dataSet,         language : lang_kor or lang_eng     } ); } );
        </script>
    </body>
</html>