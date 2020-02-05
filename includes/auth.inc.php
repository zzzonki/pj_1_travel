<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
?>
<section class="columns is-centered">
    <div class="column is-half">
    <form action="form_p.php" method="GET" class="has-background-light">
        <div class="field">
            <div class="box">
                <label for="" class="label">Username</label>
                <input type="text" class="input is-medium" placeholder="id" name="id">

                <label for="" class="label">Password</label>
                <input type="password" class="input is-medium" placeholder="порядковый номер" name="ordera">
        </div>
        <button class="button is-info is-medium is-pulled-right" type="submit">Отправить данные</button>
    </form>
    </div>
</section>