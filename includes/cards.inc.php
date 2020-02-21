<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Card.php";
ECHO "
<section class='cards'>";

for ($i=0; $i < count($cards["Img"]); $i++) {
    $card = new Card($cards_cms["Id"][$i], $cards_cms["Img"][$i], $cards_cms["Header"][$i], $cards_cms["Parag"][$i], $cards_cms["Ordera"][$i]);
    ECHO "<div class='card animated zoomIn delay-{$i}s'>";
        echo $card->return_view();
}

ECHO "
</section>
";