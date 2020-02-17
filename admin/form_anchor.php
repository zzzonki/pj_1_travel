<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
$ans = $_POST['choose'];
$id = $_POST['id'];
$a_path = $_POST['anchor_path'];
$p = $_POST['anchor_cont'];
$ordera = $_POST['ordera'];
$colors = $_POST['color'];

// В скобках имена инпутов из admin.parag.php

if($ans=="ins"){
    // добавить
    $sql = "INSERT INTO anchors VALUES('$id', '$colors', '$a_path', '$p', '$ordera')";
    if($connect->query($sql)){
        echo "Новая ссылка успешно загружена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}
if($ans=="del"){
    // удалить
    $id = trim($id);
    $sql = "DELETE FROM anchors WHERE id='$id'";
    if($connect->query($sql)){
        echo "Ссылка успешно удалена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}
if($ans=="update"){
    // здесь происхождит обновление параграфа
    $sql = "UPDATE anchors SET path='$a_path', content='$p', ordera='$ordera' WHERE id='$id'";
    if($connect->query($sql)){
        echo "Ссылка успешно обновлена $back $back_timer";
    } else {
        echo "Это фиаско, братан";
    }
    $connect->close();
    exit();
}