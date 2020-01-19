<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
ECHO "
    <section class='info info__center' id='ao'>
        <h3 class='info__h3'>
            Причины воспользоваться нашими турами
        </h3>
        <div class='info-text'>
            <ul class='info__ul'>";
            for ($i=0; $i < count($li_info); $i++) { 
                ECHO "<li>{$li_info[$i]}</li>";            
            }
ECHO "
            </ul>
        </div>
    </section>
";