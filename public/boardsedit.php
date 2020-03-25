<?php
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../includes/DatabaseFunctions.php';

try {
	if (isset($_POST['board'])) {

		$board = $_POST['board'];
		$board['boarddate'] = new DateTime();
		$board['authorId'] = 2;

		save($pdo, 'board', 'id', $board);
		
		header('location: boards.php');  

	}
	else {

		if (isset($_GET['id'])) {
      $board = findById($pdo, 'board', 'id', $_GET['id']);
      $title = '게시글 글 수정';
    }
    else{$title = '게시글 글 등록';
    }

		
		ob_start();

		include  __DIR__ . '/../templates/boardsedit.html.php';

		$output = ob_get_clean();
	}
}
catch (PDOException $e) {
	$title = '오류가 발생했습니다';

	$output = '데이터베이스 오류: ' . $e->getMessage() . ', 위치: ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';