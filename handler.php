<?php
header("Access-Control_Allow-Origin: *");
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Db.php";

function show_card($sql)
{
    $result = Db::getdbconnect()->query($sql);
    $cards = ["Img"=> [], "Header"=> [], "Parag"=> [], "Order"=> [], "Date"=> []];
    while($row = $result->fetch_assoc()){
        array_push($cards["Img"], $row["img"]);
        array_push($cards["Header"], $row["header"]);
        array_push($cards["Parag"], $row["parag"]);
        array_push($cards["Order"], $row["ordera"]);
        array_push($cards["Date"], $row["date"]);
    }
//    инициализация объекта cards
//    генерация его html как в cards.inc.php
//    его возвращение в конце работы функции
//    ее в js нужно будет добавить через insertAdjacentHTML
//    cards.inc.php больше не нужны, как и его импорт в index.php

}

if($_GET['price'] = 'asc') {
    $sql = "SELECT * FROM cards ORDER BY parag ASC";
    show_card($sql);



} elseif(($_GET['price'] = 'desc')){
    $sql = "SELECT * FROM cards ORDER BY parag DESC";
    show_card($sql);
}