    <?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/header.inc.php";
    ?>
    <section class="has-background-link columns">
        <div class="column has-text-centered">
            <h1 class="label is-size-4 has-text-white">Hello user</h1>
            <h3 class="is-size-5 has-text-white">CMS система <span class="has-text-danger has-text-weight-bold">Nordic</span></h3>
        </div>
    </section>
        <div class="columns has-background-success">
            <div class="column has-text-centered">
                <a href="/admin/parag"><button class="button is-size-4 is-danger">Отредактировать параграфы</button></a>
                <a href="/admin/cards"><button class="button is-size-4 is-link">Отредактировать карточки</button></a>
                <a href="/admin/anchor"><button class="button is-size-4 is-warning">Отредактировать ссылки</button></a>
            </div>
        </div>
</body>
</html>