<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
echo "
    <section class='info' id='info'>
        <h3 class='info__h3'>
            {$headers[0]}
        </h3>
        <div class='info-text'>
";
for ($i=0; $i < count($info); $i++) { 
    echo "<p class='info-text__p'>";
    echo "$info[$i]";
    echo "</p>";
}
echo "
            </div>
    </section>
";