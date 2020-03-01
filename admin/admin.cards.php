<?php
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/admin/admin.head.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Db.php";

if(isset($_POST['choose'])) {
    echo "hello";
    $ans = $_POST['choose'];
    $id = $_POST['id'];
    $header = $_POST['header'];
    $parag = $_POST['parag_cont'];
    $ordera = $_POST['ordera'];
    $date = date("Y-m-d");


    if ($ans == "ins") {
        // добавить
        print_r($_FILES);
        $upload_name = uniqid() . $_FILES['picture']['name']; // Несовершенный код
        $path = "img/upload_img/$upload_name";
        $uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/pj_1_travel/img/upload_img/";
        $uploadfile = $uploaddir . $upload_name;

        // Процесс валидизации размера
        if ($_FILES['picture']['size'] >= 2000000) {
            echo "Так много нельзя! Найдите картинку поменьше. $back";
            die();
        }

        // Сам процесс перемещения файла на сервер
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
            echo "Файл в общем корректный и все работает верно. ";
        } else {
            echo "Возможна атака с помощью файловой загрузки. ";
        }

        // здесь будет движение этого файла и показатель, загружен он или нет
        $sql = "INSERT INTO cards VALUES('$id', '$path', '$header', '$parag', '$ordera', '$date')";
        if (Db::getdbconnect()->query($sql)) {
            echo "Новая карточка успешно загружена $back $back_timer";
        } else {
            echo "Это фиаско, братан $back";
        }
        exit();
    }
    if ($ans == "del") {
        // удалить
        $id = trim($id);
        $sql_path = "SELECT img FROM cards WHERE id='$id'";
        $result = Db::getdbconnect()->query($sql_path);
        while ($row = $result->fetch_assoc()) {
            unlink($_SERVER["DOCUMENT_ROOT"] . "/pj_1_travel/" . $row['img']);
        }
        $sql = "DELETE FROM cards WHERE id='$id'";
        if (Db::getdbconnect()->query($sql)) {
            echo "Карточка успешно удалена $back $back_timer";
        } else {
            echo "Это фиаско, братан $back";
        }
        exit();
    }
    if ($ans == "update") {
        // здесь происхождит обновление параграфа
        $id = trim($id);

        $sql_path = "SELECT img FROM cards WHERE id='$id'";
        $result = Db::getdbconnect()->query($sql_path);
        while ($row = $result->fetch_assoc()) {
            echo "Карточка успешно удалена $back $back_timer";
            echo "<br>";
            unlink($_SERVER["DOCUMENT_ROOT"] . "/pj_1_travel/" . $row['img']);
        }

        // добавить
        $upload_name = uniqid() . $_FILES['picture']['name']; // Несовершенный код
        $path = "img/upload_img/{$upload_name}";
        $uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/pj_1_travel/img/upload_img/";
        $uploadfile = $uploaddir . $upload_name;

        // Процесс валидизации размера
        if ($_FILES['picture']['size'] >= 2000000) {
            echo "Так много нельзя! Найдите картинку поменьше. $back";
            die();
        }

        // Сам процесс перемещения файла на сервер
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
            echo "Файл в общем корректный и все работает верно. ";
        } else {
            echo "Возможна атака с помощью файловой загрузки. ";
        }
        $sql = "UPDATE cards SET img='$path', header='$header', parag='$parag', ordera='$ordera' WHERE id='$id'";


        if ($connect->query($sql)) {
            echo "Запись успешно обновлена $back $back_timer";
        } else {
            echo "Это фиаско, братан $back";
        }
        $connect->close();
        exit();
    }
}
?>
<section class="columns has-background-success is-centered">
    <div class="column is-half has-text-centered">
    <h3 class="title has-text-white">Редактирование карточек</h3>
    <hr class="login-hr">
    <p class="has-text-white is-size-5">Введите контент, каждую карточку отдельно</p>
    <figure class="avatar">
        <img src="/pj_1_travel/img/kangaroo.png">
        <!-- //TODO Сделать так, чтобы картинка подтягивалась с первой карточки -->
    </figure>
    <form method="POST" class="has-background-light" enctype="multipart/form-data">
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
                <label for="" class="label">Введите ID карточки</label>
                <input type="text" class="input is-medium" placeholder="id" name="id">

                <label for="" class="label">Введите порядковый номер карточки</label>
                <input type="text" class="input is-medium" placeholder="порядковый номер" name="ordera">

                <label for="" class="label">Введите заголовок</label>
                <input type="text" class="input is-medium" placeholder="заголовок" name="header">

                <div class="field">
                        <label class="label">Загрузите картинку
                    <div class="file is-centered">
                            <input class="file-input" type="file" name="picture" accept="image/jpg,image/jpeg,image/png">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Выберите файл   
                                </span>
                            </span>
                        </label>
                    </div>
                </div>

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
            foreach ($cards_cms as $key => $value) {
                echo "<th> {$key} </th>";
            }
            ?>
        </tr>
        </thead>
        <?php
        for ($i=0; $i < count($cards_cms["Id"]); $i++) { 
            echo "<tr>";
            echo "<th>{$cards_cms['Id'][$i]}</th>";
            echo "<th>{$cards_cms['Img'][$i]}</th>";
            echo "<th>{$cards_cms['Header'][$i]}</th>";
            echo "<th>{$cards_cms['Parag'][$i]}</th>";
            echo "<th>{$cards_cms['Ordera'][$i]}</th>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>