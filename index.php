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
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/info_2.inc.php";
    ?>
    <!-- <div class="slider">
        <div class="slider_item slider_item_0">
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
     </div> -->
    <?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/cards.inc.php";
    ?>
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
    <?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/faq.inc.php";
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/footer.inc.php";
    ?>
    
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