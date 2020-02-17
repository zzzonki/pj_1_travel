<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";

$name = $_POST["name"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE name = '$name'";
$result = $connect->query($sql);
$row_cnt = $result->num_rows;
if($row_cnt == 1){
    $row = $result->fetch_assoc();
    if(md5($password) == $row['password']){
        echo "Добро пожаловать";
    } else{
        echo "Неверный пароль";
    }
} else{
    echo "Такого пользователя не существует";
}
