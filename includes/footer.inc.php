<?php
ECHO "
    <footer id='contacts'>
    <div class='footer_wrap'>
        <div class='contacts'>
            <h5 class='contacts__h5 contacts__orange'>Мы рядом с вами</h5>
            <p class='contacts__p contacts__orange'>Москва, ул. Героев труда, 6</p>
            <p class='contacts__p'>Тел: 8(888)888-88-88</p>
            <p class='contacts__p'>Email: edu@travel.ru</p>
            <p class='contacts__p'>Часы работы: пн-пт 10-13</p>
        </div>
        <div class='soc'>
            <a href='https://vk.com' target='blank'><div class='soc_icons soc_icons_vk'></div></a>
            <a href='https://facebook.com' target='blank'><div class='soc_icons soc_icons_fb'></div></a>
            <a href='https://instagram.com' target='blank'><div class='soc_icons soc_icons_inst'></div></a>
        </div>
    </div>
    <div class='footer__logo'>
    </div>
    <ul class='footer__ul'>
";
for ($i=0; $i < count($places); $i++) { 
    ECHO "
    <li>{$places[$i]}</li>       
    ";
}
ECHO "
    </ul>
    </footer>
";