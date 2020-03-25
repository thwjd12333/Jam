<?php

try {
    include __DIR__ . '/../includes/DatabaseConnection.php';
    include __DIR__ . '/../classes/DatabaseTable.php';
    include __DIR__ . '/../controllers/BoardController.php';

    $boardsTable = new DatabaseTable($pdo, 'board', 'id');
    $authorsTable = new DatabaseTable($pdo, 'author', 'id');
  
    $boardController = new BoardController($boardsTable, $authorsTable);
    if(isset($_GETp['edit'])){
      $page = $boardController->edit();
    }
    else if( isset($_GET['delete']))
    {
      $page = $boardController->delete();
    }
    else if( isset($_GET['list']))
    {
      $page = $boardController->list();
    }
    else{
      $page = $boardController->home();
    }
   

}
catch (PDOException $e) {
  $title = '오류가 발생했습니다';

  $output = '데이터베이스 오류: ' . $e->getMessage() . ', 위치: ' .
  $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';