<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Db.php";

if(isset($_POST['choose'])){
    $ans = $_POST['choose'];
    $id = $_POST['id'];
    $p = $_POST['parag_cont'];
    $ordera = $_POST['ordera'];

// В скобках имена инпутов из admin.parag.php

    if ($ans == "ins") {
        // добавить
        $sql = "INSERT INTO info VALUES('$id', '$p', '$ordera')";
        if (Db::getdbconnect()->query($sql)) {
            echo "Новая запись успешно загружена $back $back_timer";
        } else {
            echo "Это фиаско, братан";
        }
        exit();
    }
    if ($ans == "del") {
        // удалить
        $id = trim($id);
        $sql = "DELETE FROM info WHERE id='$id'";
        if (Db::getdbconnect()->query($sql)) {
            echo "Запись успешно удалена $back $back_timer";
        } else {
            echo "Это фиаско, братан";
        }
        exit();
    }
    if ($ans == "update") {
        // здесь происхождит обновление параграфа
        $sql = "UPDATE info SET content='$p', ordera='$ordera' WHERE id='$id'";
        if (Db::getdbconnect()->query($sql)) {
            echo "Запись успешно обновлена $back $back_timer";
        } else {
            echo "Это фиаско, братан";
        }
        exit();
    }
}