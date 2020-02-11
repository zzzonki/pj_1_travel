<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
?>
<section class="hero is-fullheight is-centered has-background-link">
    <form action="form_reg.php" method="POST" class=" column is-half is-offset-3">
        <div class="field">
                <label for="" class="label">Username</label>
                <div class="control">
                    <input type="text" class="input is-medium" placeholder="Введите имя" required" name="name">
                </div>

                <label for="" class="label">Password</label>
                <div class="control">
                <input type="password" class="input is-medium" placeholder="Введите пароль" required name="password">
                </div>
        </div>
        <button class="button is-danger is-medium is-pulled-right" type="submit" id="sub">Отправить данные</button>
    </form>
</section>