<?php

$title = '레시피';

ob_start();

include  __DIR__ . '/../templates/recipe.html.php';

$output = ob_get_clean();

include  __DIR__ . '/../templates/layout.html.php';