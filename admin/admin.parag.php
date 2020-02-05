<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
?>
<section class="columns has-background-success is-centered">
    <div class="column is-half has-text-centered">
    <h3 class="title has-text-white">Редактирование параграфов</h3>
    <hr class="login-hr">
    <p class="has-text-white is-size-5">Введите контент каждого параграфа отдельно</p>
    <figure class="avatar">
        <img src="/pj_1_travel/img/moscow.png">
        <!-- //TODO Сделать так, чтобы картинка подтягивалась с первой карточки -->
    </figure>
    <form action="form_p.php" method="GET" class="has-background-light">
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
                <label for="" class="label">Введите ID параграфа</label>
                <input type="text" class="input is-medium" placeholder="id" name="id">

                <label for="" class="label">Введите порядковый номер параграфа</label>
                <input type="text" class="input is-medium" placeholder="порядковый номер" name="ordera">

                <label for="" class="label">Введите данные параграфа</label>
                <textarea rows=15 type="text" class="textarea is-medium" placeholder="введите текст" name="parag_cont"></textarea>
            </div>
        </div>
        <button class="button is-info is-large is-pulled-right" type="submit">Отправить данные</button>
    </form>
    </div>
</section>
<!-- тут выводтся спрсок параграфов с их id -->
<div class="columns has-background-success is-centered">
<div class="column is-half">
    <table class="table is-bordered">
        <thead>
        <tr>
            <?php
            foreach ($info_cms as $key => $value) {
                echo "<th> {$key} </th>";
            }
            ?>
        </tr>
        </thead>
        <?php
        for ($i=0; $i < count($info_cms["id"]); $i++) { 
            echo "<tr>";
            echo "<th>{$info_cms['id'][$i]}</th>";
            echo "<th>{$info_cms['content'][$i]}</th>";
            echo "<th>{$info_cms['ordera'][$i]}</th>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>