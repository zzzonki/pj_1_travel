<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
?>
<section class="columns has-background-warning is-centered">
    <div class="column is-half has-text-centered">
    <h3 class="title has-text-white">Редактирование ссылок</h3>
    <hr class="login-hr">
    <p class="has-text-white is-size-5">Введите данные каждой ссылки отдельно</p>
    <figure class="avatar">
        <img src="/pj_1_travel/img/big-ben.png">
        <!-- //TODO Сделать так, чтобы картинка подтягивалась с первой карточки -->
    </figure>
    <form action="/admin/anchor_done" method="POST" class="has-background-light">
        <div class="field">
            <label class="radio">
                <input type="radio" name="choose" value="ins" reqired>
                Вставить
            </label>
            <label class="radio">
                <input type="radio" name="choose" value="del" reqired>
                Удалить
            </label>
            <label class="radio">
                <input type="radio" name="choose" value="update" reqired>
                Редактировать
            </label>
        </div>
        <div class="field">
            <div class="box">
                <label for="" class="label">Введите ID ссылки</label>
                <input type="text" class="input is-medium" placeholder="id" name="id">

                <label for="" class="label">Введите цвет ссылки</label>
                <input type="text" class="input is-medium" placeholder="Цвет" name="color">

                <label for="" class="label">Введите порядковый номер ссылки</label>
                <input type="text" class="input is-medium" placeholder="порядковый номер" name="ordera">

                <label for="" class="label">Введите адрес ссылки</label>
                <textarea type="text" class="input is-medium" placeholder="введите адрес" name="anchor_path"></textarea>

                <label for="" class="label">Введите название ссылки</label>
                <textarea type="text" class="input is-medium" placeholder="введите название" name="anchor_cont"></textarea>

                <!-- TODO Подумать над настройкой цвета ссылок. В существующем виде она неактуалена -->
            </div>
        </div>
        <button class="button is-info is-large is-pulled-right" type="submit">Отправить данные</button>
    </form>
    </div>
</section>
<!-- тут выводтся спрсок параграфов с их id -->
<div class="columns has-background-warning is-centered">
<div class="column is-half">
    <table class="table is-bordered">
        <thead>
        <tr>
            <?php
            foreach ($anchors_cms as $key => $value) {
                echo "<th> {$key} </th>";
            }
            ?>
        </tr>
        </thead>
        <?php
        for ($i=0; $i < count($anchors_cms["id"]); $i++) { 
            echo "<tr>";
            echo "<th>{$anchors_cms['id'][$i]}</th>";
            echo "<th>{$anchors_cms['color'][$i]}</th>";
            echo "<th>{$anchors_cms['path'][$i]}</th>";
            echo "<th>{$anchors_cms['content'][$i]}</th>";
            echo "<th>{$anchors_cms['ordera'][$i]}</th>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>