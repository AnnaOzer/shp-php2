<?php

// получить данные из get, по уолчанию 1я новость
$id = !empty($_GET['id']) ? $_GET['id'] : 1;

// обратиться к модели за одной новостью

// вывести эту одну новость