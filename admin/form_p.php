<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
$ans = $_GET['choose'];
$id = $_GET['id'];
$p = $_GET['parag_cont'];
$ordera = $_GET['ordera'];

// В скобках имена инпутов из admin.parag.php

if($ans=="ins"){
    // добавить
    $sql = "INSERT INTO info VALUES('$id', '$p', '$ordera')";
    if($connect->query($sql)){
        echo "Новая запись успешно загружена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}
if($ans=="del"){
    // удалить
    $id = trim($id);
    $sql = "DELETE FROM info WHERE id='$id'";
    if($connect->query($sql)){
        echo "Запись успешно удалена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}
if($ans=="update"){
    // здесь происхождит обновление параграфа
    $sql = "UPDATE info SET content='$p', ordera='$ordera' WHERE id='$id'";
    if($connect->query($sql)){
        echo "Запись успешно обновлена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}