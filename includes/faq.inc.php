<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
ECHO "<div class='faq_wrapper'>";

for ($i=0; $i < count($faq["Quest"]); $i++) { 
    ECHO "<div class='faq_panel'>
    <div class='faq_panel__quest'>
        <i class='faq_arrow fas fa-angle-up'></i>
        {$faq["Quest"][$i]}
    </div>
    <div class='faq_panel__answer'>
        {$faq["Answer"][$i]}
    </div>
</div>";
}

ECHO "</div>";