<?php
$db_host = 'localhost';
$db_name = 'phpmytest';
$db_user = 'root';
$db_pass = '';


$dsn =sprintf('mysql:host=%s;$dbname=%s;charset=utf8', $db_host, $db_name);

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

    $pdo->query("use project_resort"); //再呼叫一次資料庫

} catch(PDOException $ex){
    echo 'Ex:'. $ex->getMessage();
}

//若有Session，則執行內容 session_start()，代表執行其他分頁的$_SESSION
if(! isset($_SESSION)){
    session_start();
}

define('WEB_ROOT', '/proj_arcadia')
?>