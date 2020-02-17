<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
?>

<section class="hero is-fullheight is-centered has-background-dark">
    <noscript>
        <h2 class="is-danger">Включите javascript, для корректной работы сайта</h2>
    </noscript>
    <form action="/postreg" method="POST" class=" column is-half is-offset-3">
        <div class="field">
                <label for="" class="label has-text-white">Имя</label>
                <div class="control">
                    <input type="text" class="input is-medium" placeholder="Введите имя" required name="name">
                </div>

                <label for="" class="label has-text-white">E-mail</label>
                <div class="control">
                    <input type="email" class="input is-medium" placeholder="Введите почту" required name="email">
                </div>

                <label for="" class="label has-text-white">Пароль</label>
                <div class="control">
                <input type="password" class="input is-medium" placeholder="Введите пароль" required name="password">
                </div>

                <label for="" class="label has-text-white">Повтор пароля</label>
                <div class="control">
                <input type="password" class="input is-medium" placeholder="Повторите пароль" required name="dubl_password">
                </div>

                <label class="checkbox has-text-white">
                    <input type="checkbox" name="personal">
                    Согласен с обработкой персональных данных
                </label>
        </div>
        <button class="button is-danger is-medium is-pulled-right" type="submit" id="sub">Отправить данные</button>
    </form>
</section>
<?php
    echo "<script src='http://";
    echo $_SERVER['HTTP_HOST'];
    echo "/pj_1_travel/admin/auth/validate.js'>
    </script>";
?>
<script src="validate.js"></script>
</body>