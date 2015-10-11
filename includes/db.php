<?php

$host       = 'localhost';
$user       = 'root';
$password   = '';
$db_name    = 'myblog';

mysql_connect($host, $user, $password, $db_name) or die('Can not connect database !');
mysql_select_db($db_name);

mysql_set_charset('utf8');

function esc($text) {
    return mysql_real_escape_string($text);// mã hóa DL
}

function db_get_all($sql) {
    $result = mysql_query($sql);
    $data = array();
    
    if ($result) {
        while ($row = mysql_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    
    return $data;
}
