<?php
header("Access-Control_Allow-Origin: *");
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Db.php";

// Для подключения Api, на данном этапе, нужно отключить роутинг, закомментировав все содержание index.php в папке htdocs

//if($_GET['price'] = 'asc') {
//
//    $sql = "SELECT * FROM cards ORDER BY parag ASC";
//    show_card($sql);
//
//
//
//} elseif(($_GET['price'] = 'desc')){
//    $sql = "SELECT * FROM cards ORDER BY parag DESC";
//    show_card($sql);
//}

$sql = "SELECT *from deals";
$result = Db::getdbconnect()->query($sql);
$deal = ['id'=>[], 'deal'=>[]];
while($row = $result->fetch_assoc()){
    array_push($deal["id"], $row["id"]);
    array_push($deal["deal"], $row["deal"]);
}
$data = json_encode($deal);
echo ($data);
