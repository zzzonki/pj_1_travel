<?php
header("Access-Control_Allow-Origin: *");
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/User.class.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Util.php";

session_start();
function show_card($sql, $sql2)
{
    $result = Db::getdbconnect()->query($sql);
    $result2 = Db::getdbconnect()->query($sql2);
    $cards = ["Img"=> [], "Header"=> [], "Parag"=> [], "Order"=> [], "Date"=> []];
    // $users = ["Name" => []];
    while($row = $result->fetch_assoc()){
        array_push($cards["Img"], $row["img"]);
        array_push($cards["Header"], $row["header"]);
        array_push($cards["Parag"], $row["parag"]);
        array_push($cards["Order"], $row["ordera"]);
        array_push($cards["Date"], $row["date"]);
        // while($row = $result2->fetch_assoc()){
        //     array_push($users["Name"], $row["name"]);
        // }
    }   

    $card_name = $_SESSION['name'];
//    инициализация объекта cards
//    генерация его html как в cards.inc.php
//    его возвращение в конце работы функции
//    ее в js нужно будет добавить через insertAdjacentHTML
//    cards.inc.php больше не нужны, как и его импорт в index.php
    ECHO "
<section class='cards'>";

    for ($i=0; $i < count($cards["Img"]); $i++) {
        ECHO "<div class='card animated zoomIn delay-{$i}s'>";
        echo "<div class='card__img' style='background-image:url(".Util::get_full_img($cards['Img'][$i]).");'> </div><h3 class='card__h3'>".$cards['Header'][$i]."</h3><div class='card__line'></div>
    <p class='card__p'>".$cards['Parag'][$i]."</p><p>".$cards['Date'][$i]."</p><p>".$card_name."</p>";
        ECHO "</div>";
    }

    ECHO "
</section>
";
}

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


$sql = "SELECT * FROM cards ORDER BY parag ASC";
$sql2 = "SELECT name FROM users WHERE name = User->user_name";
show_card($sql, $sql2);

