<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";

$ans = $_POST['choose'];
$id = $_POST['id'];
$header = $_POST['header'];
$parag = $_POST['parag_cont'];
$ordera = $_POST['ordera'];
$date = date("Y-m-d");

// В скобках имена инпутов из admin.parag.php

print_r($_FILES);
print_r($_POST);

if($ans=="ins"){
    // добавить
    print_r($_FILES);
    $upload_name = uniqid() .$_FILES['picture']['name']; // Несовершенный код
    $path = "img/upload_img/$upload_name";
    $uploaddir = $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/img/upload_img/";
    $uploadfile = $uploaddir .$upload_name;

    // Процесс валидизации размера
    if($_FILES['picture']['size']>= 2000000){   
        echo "Так много нельзя! Найдите картинку поменьше. $back";
        die();
    }
    
    // Сам процесс перемещения файла на сервер
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)){
        echo "Файл в общем корректный и все работает верно. ";
    } else{
        echo "Возможна атака с помощью файловой загрузки. ";
    }
    
    // здесь будет движение этого файла и показатель, загружен он или нет
    $sql = "INSERT INTO cards VALUES('$id', '$path', '$header', '$parag', '$ordera', '$date')";
    if($connect->query($sql)){
        echo "Новая карточка успешно загружена $back $back_timer";
    } else {
        echo "Это фиаско, братан $back";
    }
    $connect->close();
    exit();
}
if($ans=="del"){
    // удалить
    $id = trim($id);
    $sql_path = "SELECT img FROM cards WHERE id='$id'";
    $result = $connect->query($sql_path);
    while($row = $result->fetch_assoc()){
        unlink($_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/".$row['img']);
    }
    $sql = "DELETE FROM cards WHERE id='$id'";
    if($connect->query($sql)){
        echo "Карточка успешно удалена $back $back_timer";
    } else {
        echo "Это фиаско, братан $back";
    }
    $connect->close();
    exit();
}
if($ans=="update"){
    // здесь происхождит обновление параграфа
    $id = trim($id);
    
    $sql_path = "SELECT img FROM cards WHERE id='$id'";
    $result = $connect->query($sql_path);
    while($row = $result->fetch_assoc()){
        echo "Карточка успешно удалена $back $back_timer";
        echo "<br>";
        unlink($_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/".$row['img']);
    }

    // добавить
    $upload_name = uniqid() .$_FILES['picture']['name']; // Несовершенный код
    $path = "img/upload_img/{$upload_name}";
    $uploaddir = $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/img/upload_img/";
    $uploadfile = $uploaddir .$upload_name;

    // Процесс валидизации размера
    if($_FILES['picture']['size']>= 2000000){   
        echo "Так много нельзя! Найдите картинку поменьше. $back";
        die();
    }

    // Сам процесс перемещения файла на сервер
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)){
        echo "Файл в общем корректный и все работает верно. ";
    } else{
        echo "Возможна атака с помощью файловой загрузки. ";
    }
    $sql = "UPDATE cards SET img='$path', header='$header', parag='$parag', ordera='$ordera' WHERE id='$id'";



    if($connect->query($sql)){
        echo "Запись успешно обновлена $back $back_timer";
    } else {
        echo "Это фиаско, братан $back";
    }
    $connect->close();
    exit();
}