<?php

$title = '소개';

ob_start();

include  __DIR__ . '/../templates/about.html.php';

$output = ob_get_clean();

include  __DIR__ . '/../templates/layout.html.php';