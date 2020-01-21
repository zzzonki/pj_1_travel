<?php
$connect = new mysqli("localhost", "root", "", "14.10");
$connect-> set_charset("utf8");
if ($connect->connect_errno){
    die('Ошибка соединения: ' . $connect->connect_errno);
    // echo("Не удалось подключиться{$connect->connect_errno}");
}