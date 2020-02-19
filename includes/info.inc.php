<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Info.php";
echo "
    <section class='info' id='info'>
        <h3 class='info__h3'>
            {$headers[0]}
        </h3>
";
for ($i=0; $i < count($info); $i++) { 
    $info_p = new Info($info_cms["id"][$i], $info_cms["content"][$i], $info_cms["ordera"][$i]);
    ECHO $info_p->content;
}
echo "</section>";