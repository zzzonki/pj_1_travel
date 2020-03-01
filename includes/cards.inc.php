<!--Файл больше не нужен.
Его функционал перенесен в handler.php-->

<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Card.php";
ECHO "
<section class='cards'>";

for ($i=0; $i < count($cards["Img"]); $i++) {
    $card = new Card($cards_cms["Id"][$i], $cards_cms["Img"][$i], $cards_cms["Header"][$i], $cards_cms["Parag"][$i], $cards_cms["Ordera"][$i], $cards_cms["Date"][$i]);
    ECHO "<div class='card animated zoomIn delay-{$i}s'>";
        echo $card->return_view();
    ECHO "</div>";
}

ECHO "
</section>
";
// TODO доборботать отображение даты и имени