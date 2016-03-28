<?php

function config()
{
    return include '../config.php';
}

function DBConnect()
{
    $config = config();
    mysql_connect(
        $config['host'],
        $config['user'],
        $config['password']
    );
}