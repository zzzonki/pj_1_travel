<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";

if($result = $connect->query("SELECT * FROM keywords")){
    $keywords = [];
    while($row = $result->fetch_assoc()){
        array_push($keywords, $row["keyword"]);
    }
    $result->close();
};

if($result = $connect->query("SELECT * FROM anchors")){
    $anchor = ["Color"=> [], "Path"=> [], "Content"=> [], "Order"=> []];
    while($row = $result->fetch_assoc()){
        array_push($anchor["Color"], $row["color"]);
        array_push($anchor["Path"], $row["path"]);
        array_push($anchor["Content"], $row["content"]);
        array_push($anchor["Order"], $row["ordera"]);
    }
    $result->close();
}

if($result = $connect->query("SELECT * FROM info ORDER BY ordera")){
    $info = [];
    while($row = $result->fetch_assoc()){
        array_push($info, $row["content"]);
    }
    $result->close();
};

if($result = $connect->query("SELECT * FROM headers")){
    $headers = [];
    while($row = $result->fetch_assoc()){
        array_push($headers, $row["content"]);
    }
    $result->close();
};

if($result = $connect->query("SELECT * FROM li_info ORDER BY ordera")){
    $li_info = [];
    while($row = $result->fetch_assoc()){
        array_push($li_info, $row["content"]);
    }
    $result->close();
};
// $li_info = ["Задорные аниматоры", "Просторные номера", "Комфортные самолеты", "Мягкий песок на пляже"];

if($result = $connect->query("SELECT * FROM cards ORDER BY ordera")){
    $cards = ["Img"=> [], "Header"=> [], "Parag"=> [], "Order"=> []];
    while($row = $result->fetch_assoc()){
        array_push($cards["Img"], $row["img"]);
        array_push($cards["Header"], $row["header"]);
        array_push($cards["Parag"], $row["parag"]);
        array_push($cards["Order"], $row["ordera"]);
    }
    $result->close();
};


if($result = $connect->query("SELECT * FROM faq ORDER BY ordera")){
    $faq = ["Quest"=>[],"Answer"=>[]];
    while($row = $result->fetch_assoc()){
        array_push($faq["Quest"], $row["quest"]);
        array_push($faq["Answer"], $row["answer"]);
    }
    $result->close();
};

if($result = $connect->query("SELECT * FROM places ORDER BY ordera")){
    $places = [];
    while($row = $result->fetch_assoc()){
        array_push($places, $row["content"]);
    }
    $result->close();
};