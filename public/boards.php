<?php

try {
    include __DIR__ . '/../includes/DatabaseConnection.php';
    include __DIR__ . '/../includes/DatabaseFunctions.php';

   $result = findAll($pdo, 'board');

   $boards = [];
   foreach($result as $board)
   {
     $author = findById($pdo, 'author', 'id', $board['authorid']);

     $boards[] = [
          'id' => $board['id'],
          'boardtext' => $board['boardtext'],
          'boarddate' => $board['boarddate'],
          'name' => $author['name'],
          'email' => $author['email']
     ];
   }
    
  $title = '예제';

  $totalBoards = total($pdo,'board');

  ob_start();

  include  __DIR__ . '/../templates/boards.html.php';

  $output = ob_get_clean();

}
catch (PDOException $e) {
  $title = '오류가 발생했습니다';

  $output = '데이터베이스 오류: ' . $e->getMessage() . ', 위치: ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';