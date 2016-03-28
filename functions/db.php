<?php

function DBConnect()
{
    $config = include '../config.php';
    mysql_connect(
        $config['host'],
        $config['user'],
        $config['password']
    );
}