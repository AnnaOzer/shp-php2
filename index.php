<?php

require_once 'models/news.php';

$news = News_getAll();

include 'view/index.php';