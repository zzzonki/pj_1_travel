<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
// получаем данные из пост
// валидизация
// данные пользователя отправляются в БД
// пишется, что пользователь зареган успешно

$name = $_POST["name"];
$mail = $_POST["email"];

$name = trim($name);
$mail = trim($mail); // Обрезка пробелов

$pattern_name = '/\w{3,}/';
$pattern_mail = '/\w+@\w+\.\w+/';
$pattern_password = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z\d]{8,}/';

$password = $_POST["password"];
$dubl_password = $_POST["dubl_password"];

    if(preg_match($pattern_name, $name)&&preg_match($pattern_mail, $mail)&&preg_match($pattern_password, $password)&& $password == $dubl_password){

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
        echo "<h1>Вы успешно зарегестрированы</h1>
        <script>
            setTimeout(()=>{
                window.location.assign('http://localhost/admin')
            }, 3000)
        </script>
        ";
    }
} else {
    echo "<h1> Ты что, хакер? Уходи. </h1>";
}