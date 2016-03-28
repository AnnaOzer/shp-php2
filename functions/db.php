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

function DBQuery($sql)
{
    DBConnect();
    $res = mysql_query($sql);

    $ret = [];
    while ($row = mysql_fetch_assoc($res))
    {
        $ret[] = $row;
    }
    return $ret;
}