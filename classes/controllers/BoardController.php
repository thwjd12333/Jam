<?php
class BoardController {
    private $authorsTable;
    private $boardsTable;

    public function __construct(DatabaseTable $boardsTable,DatabaseTable $authorsTable) {
        $this ->boardsTable = $boardsTable;
        $this ->authorsTable = $authorsTable;
    }

    public function home()
    {
        $title = '마로니에 잼';
        return ['template' => 'home.html.php', 'title' => $title];
    }

    public function about()
    {
        $title = '소개';
        return ['template' => 'about.html.php', 'title' => $title];
    }

    public function recipe()
    {
        $title = '레시피';
        return ['template' => 'recipe.html.php', 'title' => $title];
    }
    
    public function contact()
    {
        $title = '레시피';
        return ['template' => 'contact.html.php', 'title' => $title];
    }

    public function list() {
        $result = $this->boardsTable -> findAll();

        $boards = [];
        foreach($result as $board) {
            $author = $this->authorsTable -> findById($board['authorid']);

            $boards[] = [
                'id' => $board['id'],
                'boardtext' => $board['boardtext'],
                'boarddate' => $board['boarddate'],
                'name' => $author['name'],
                'email' => $author['email']
            ];
        }

        $title = '게시판';

        $totalBoards = $this->boardsTable -> total();

        return ['template' => 'boards.html.php', 
        'title' => $title, 
        'variables' => [
                'totalBoards' => $totalBoards,
                'boards' => $boards
            ]
        ];
    }

 

    public function delete()
    {
        $this->boardsTable->delete($_POST['id']);

		header('location: index.php?action=list');
    }

    public function edit() {
		if (isset($_POST['board'])) {

			$board = $_POST['board'];
			$board['boarddate'] = new DateTime();
			$board['authorId'] = 1;

			$this->boardsTable->save($board);
			
			header('location: index.php?action=list'); 

		}
		else {

			if (isset($_GET['id'])) {
				$board = $this->boardsTable->findById($_GET['id']);
			}

			$title = '게시글 수정';

			return ['template' => 'boardsedit.html.php',
					'title' => $title,
					'variables' => [
							'board' => $board ?? null
						]
					];
		}
	}
}