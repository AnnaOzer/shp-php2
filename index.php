<?php

require_once __DIR__ . '/models/news.php';

include 'view/form_add.php';

$news = News_getAll();

include 'view/index.php';