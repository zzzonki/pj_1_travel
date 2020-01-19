<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
ECHO "
<section class='cards'>";

for ($i=0; $i < count($cards["Img"]); $i++) { 
    ECHO "<div class='card animated zoomIn delay-{$i}s'>
        <div class='card__img {$cards["Img"][$i]}'></div>
        <h3 class='card__h3'>{$cards["Header"][$i]}</h3>
        <div class='card__line'></div>
        <div class='card__p'>{$cards["Parag"][$i]}</div>
        </div>
    ";
}

ECHO "
</section>
";