<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
// получаем данные из пост
// валидизация
// данные пользователя отправляются в БД
// пишется, что пользователь зареган успешно

$name = $_POST["name"];
$mail = $_POST["email"];
$password = $_POST["password"];
$dubl_password = $_POST["dubl_password"];

if($password==$dubl_password){

    // все ок

    $sql_test = "SELECT * FROM users WHERE email = '$mail'";
    $result_test = $connect->query($sql_test);
    while($row = $result_test->fetch_assoc()){
        if($row["email"] == $mail){
            echo "уже есть пользователь с такой почтой";
            die();
        }
    }

    $password = md5($password);
    $sql = "INSERT INTO users VALUES (NULL, '$name', '$mail', '$password')";
    if($connect->query($sql)){
        echo "Ты зареган";
    }
} else {
    echo "<h1> Ты что, хакер? Уходи. </h1>";
}
