<!DOCTYPE html>
<html lang="ru">
<?php
    $title = "Путешествия по миру";
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/head.inc.php";
?>
<body>
    <?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/header.inc.php";
    // print_r($_SERVER);
    ?>
    <div class="side_nav">
        <a class="side_nav__a" href="#info">Главная</a>
        <a class="side_nav__a" href="#ao">О нас</a>
        <a class="side_nav__a" href="#contacts">Контакты</a>
    </div>
    <div class="promo">
        <div class="action">
            <h3 class="action__h3">
                Только красивые путешествия
            </h3>
            <div class="action__btm">
                Присоединиться
            </div>
        </div>
        <div class="soc">
            <a href="https://vk.com" target="blank"><div class="soc_icons soc_icons_vk"></div></a>
            <a href="https://facebook.com" target="blank"><div class="soc_icons soc_icons_fb"></div></a>
            <a href="https://instagram.com" target="blank"><div class="soc_icons soc_icons_inst"></div></a>
        </div>
    </div>
    <!-- Я добавил здесь ссылку, но мне не совсем нравится, что адрес, после нажатия на нее, выглядит вот так: http://127.0.0.1:5500/#info -->
    <?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/info.inc.php";
    ?>
    <section class="info info__center" id="ao">
        <h3 class="info__h3">
            Причины воспользоваться нашими турами
        </h3>
        <div class="info-text">
            <!-- оригинал 
            <p class="ao-text__p">Классные лежаки</p>
            <p class="ao-text__p">Вежливые гиды</p>
            <p class="ao-text__p">Вкусные кокосы на берегу</p>
            <p class="ao-text__p">Общая позитивная атмосфера</p>
            <p class="ao-text__p"><img src="img/beach.png" width="290px" alt="Пляж твоей мечты"></p>
             оригинал закончен -->
            <!-- начало о нас через список -->
            <!-- <ul class="info__ul">
                <li>Задорные аниматоры</li>
                <li>Просторные номера</li>
                <li>Комфортные самолеты</li>
                <li>Мягкий песок на пляже</li>
            </ul> -->
            <!-- конец о нас через список -->
        </div>
    </section>
    <div class="slider">
        <div class="slider_item slider_item_0">
            <!-- <img src="../img/party.jpg" alt=""> -->
            <p>Задорные аниматоры</p>
        </div>
        <div class="slider_item slider_item_1">
            <p>Просторные номера</p>
        </div>
        <div class="slider_item slider_item_2">
            <p>Комфортные самолеты</p>
        </div>
        <div class="slider_item slider_item_3">
            <p>Мягкий песок на пляже</p>
        </div>
     </div>
    <!-- Блоки дома начало  
    <section class="blocks">
        <div class="blocks__row_1">
            <div class="blocks__row_1__left">
                <img src="img/moscow.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по России</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Самые интересны уголки России</p>
                <p class="blocks__p">Самые интересные маршруты </p>
            </div>
            <div class="blocks__row_1__mid">
                <img src="img/big-ben.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по Европе</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Разные страны, разные культуры!</p>
                <p class="blocks__p">Все самое интересное</p>
                <p class="blocks__p">в современной Европе!</p>
            </div>
            <div class="blocks__row_1__right">
                <img src="img/pyramids.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по Африке</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Классные сафари, быстрые львы и</p>
                <p class="blocks__p">невероятные саванны! Все в одном</p>
                <p class="blocks__p">флаконе. Только не стоит совать</p>
                <p class="blocks__p">голову крокодилу в пасть.</p>
            </div>
        </div>
         <div class="blocks__row_1">
            <div class="blocks__row_1__left">
                <img src="img/moscow.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по России</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Самые интересны уголки России</p>
                <p class="blocks__p">Самые интересные маршруты </p>
            </div>
            <div class="blocks__row_1__mid">
                <img src="img/big-ben.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по Европе</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Разные страны, разные культуры!</p>
                <p class="blocks__p">Все самое интересное</p>
                <p class="blocks__p">в современной Европе!</p>
            </div>
            <div class="blocks__row_1__right">
                <img src="img/pyramids.png" class="blocks__img">
                <h3 class="blocks__h3">Путешествия по Африке</h3>
                <hr class="blocks__line">
                <p class="blocks__p">Классные сафари, быстрые львы и</p>
                <p class="blocks__p">невероятные саванны! Все в одном</p>
                <p class="blocks__p">флаконе. Только не стоит совать</p>
                <p class="blocks__p">голову крокодилу в пасть.</p>
            </div>
        </div>
    </section>
     блоки дома конец -->
    <br>
    <!-- блоки в классе начало -->
    <section class="cards">
        <div class="card animated zoomIn delay-0s">
            <div class="card__img card__moscow"></div>
            <h3 class="card__h3">Путешествия по России</h3>
            <div class="card__line"></div>
            <div class="card__p">Медведи, матрешки, балалайки</div>
        </div>
        <div class="card animated zoomIn delay-1s">
            <div class="card__img card__london"></div>
            <h3 class="card__h3">Путешествия по Европе</h3>
            <div class="card__line"></div>
            <div class="card__p">Разные страны - разные культуры</div>
        </div>
        <div class="card animated zoomIn delay-2s">
            <div class="card__img card__africa"></div>
            <h3 class="card__h3">Путешествия по Африке</h3>
            <div class="card__line"></div>
            <div class="card__p">Классные сафари, величественные львы и бескрайние саванны</div>
        </div>
        <div class="card animated zoomIn delay-3s">
                <div class="card__img card__north"></div>
                <h3 class="card__h3">Путешествия по Северной Америке</h3>
                <div class="card__line"></div>
                <div class="card__p">Новый свет своими глазами</div>
            </div>
            <div class="card animated zoomIn delay-4s">
                <div class="card__img card__south"></div>
                <h3 class="card__h3">Путешествия по Южной Америке</h3>
                <div class="card__line"></div>
                <div class="card__p">Южная Америка ждет нас! И там куда безопаснее, чем в фильмах</div>
            </div>
            <div class="card animated zoomIn delay-5s">
                <div class="card__img card__australia"></div>
                <h3 class="card__h3">Путешествия по Австралии</h3>
                <div class="card__line"></div>
                <div class="card__p">Посмотри на мир вниз головой</div>
            </div>
    </section>
    <section class="form_wrapper animated">
        <h3 class="form__h3">Оставьте заявку</h3>
        <span class="error_message">  </span>
        <form action="post.php" method="POST">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" placeholder="Ваше имя"  minlength="2" maxlength="16">
            <label for="surname">Ваша фамилия</label>
            <input type="text" name="surname" placeholder="Ваша фамилия" minlength="2" maxlength="16">
            <label for="telephone">Ваш номер телефона</label>
            <input type="tel" name="telephone" placeholder="Ваш номер телефона"  minlength="7" maxlength="12">
            <label for="message">Ваше сообщение</label>
            <textarea name="message" cols="40" rows="5" placeholder="Ваше сообщение"></textarea>
            <button type="submit">Отправить</button>
            <div class="cookie__exit form__exit">
                <i class="fas fa-times" aria-hidden="true"></i>
            </div>
        </form>
    </section>
    <!-- Блоки в классе конец -->
    <div class="faq_wrapper">
        <div class="faq_panel">
            <div class="faq_panel__quest">
                <i class="faq_arrow fas fa-angle-up"></i>
                Сколько за тур?
            </div>
            <div class="faq_panel__answer">
                Недорого. В дороге накормим.
            </div>
        </div>
        <div class="faq_panel">
            <div class="faq_panel__quest">
                <i class="faq_arrow fas fa-angle-up"></i>
                Сколько стоит виза?
            </div>
            <div class="faq_panel__answer">
                Зачем виза, мы так провезем.
            </div>
        </div>
        <div class="faq_panel">
            <div class="faq_panel__quest">
                <i class="faq_arrow fas fa-angle-up"></i>
                Можно ли полетать на воздушном шаре?
            </div>
            <div class="faq_panel__answer">
                Можно, но недолго.
            </div>
        </div>
    </div>
    <div class="calc">
        <h1 class="text-color-white">Калькулятор</h1>
        <input type="text" class="calc__input" placeholder="Введите выражение">
        <button class="calc__btn">Подсчитать</button>
    </div>
    <footer id="contacts">
        <div class="footer_wrap">
            <div class="contacts">
                <h5 class="contacts__h5 contacts__orange">Мы рядом с вами</h5>
                <p class="contacts__p contacts__orange">Москва, ул. Героев труда, 6</p>
                <p class="contacts__p">Тел: 8(888)888-88-88</p>
                <p class="contacts__p">Email: edu@travel.ru</p>
                <p class="contacts__p">Часы работы: пн-пт 10-13</p>
            </div>
            <div class="soc">
                <a href="https://vk.com" target="blank"><div class="soc_icons soc_icons_vk"></div></a>
                <a href="https://facebook.com" target="blank"><div class="soc_icons soc_icons_fb"></div></a>
                <a href="https://instagram.com" target="blank"><div class="soc_icons soc_icons_inst"></div></a>
            </div>
        </div>
        <!-- </div>
        <div class="footer__logo">
        </div> -->
        <!-- Анимация с летящим человечком начало -->
        <!-- <div class="footer-anim">
            <div class="left-cloud">
                <div class="big-cloud big-cloud-left"></div>
                <div class="medium-cloud medium-cloud-left"></div>
            </div>
            <div class="man">
                <div class="man-body"></div>
                <div class="man-fire"></div>
            </div>
            <div class="left-cloud">
                <div class="big-cloud big-cloud-right"></div>
                <div class="small-cloud"></div>
                <div class="medium-cloud medium-cloud-right"></div>
            </div> -->
        <ul class="footer__ul">
            <li>Путешествия по Украине</li>
            <li>Путешествия по Китаю</li>
            <li>Путешествия по Финляндии</li>
            <li>Путешествия по Норвегии</li>
            <li>Путешествия по Швеции</li>
        </ul>
    </div>
    </footer>
    <!-- Куки самостоятельно -->
    <div class="cookie">
        <div class="cookie__logo"></div>
        <div class="cookie__text">
            <p class="cookie__text_p">Наш сайт использует файлы cookies для получения</p>
            <p class="cookie__text_p">статистики и улучшения качества работы сайта</p>
        </div>
        <div class="cookie__button">Я понял</div>
        <div class="cookie__exit"><i class="fas fa-times" aria-hidden="true"></i></div>
    </div>
    <div class="cookie__screamer"></div>
    <!-- Куки в классе -->
    <!-- <div class="ck_warning">
        <h3 class="ck_warning__h3">
            Мыиспользуем куки,
            следим за вами
        </h3>
        <div class="ck_warning__cross">
            <i class="fas fa-times" aria-hidden="true"></i>
        </div>
    </div> -->
</body>
</html>