<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Db.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/Validate.php";

class User
{
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_date; #Дата регистрации пользователя


    public function login($user_name, $user_password)
    {
        $this->user_name = trim($user_name);
        $this->user_password = hash('sha256', $user_password);

        $login_query = Db::getdbconnect()->query("SELECT password FROM users WHERE name = '$this->user_name'");

        $user = $login_query->fetch_array();

        $row_cnt = $login_query->num_rows;

        if($row_cnt == 1) {
            if ($this->user_password == $user['password']) {
                session_start();

                $_SESSION['name'] = $this->user_name;

                echo "<h1>Вы успешно вошли ".$_SESSION['name']."</h1>;
                

            <script>
                setTimeout(()=>{
                    window.location.assign('http://localhost/admin');
                }, 2000)
            </script>";

                return true;

            } else {
                echo "Пароль неверный";
            }
        } else{
            echo "Такого пользователя не существует";
        }
    }

    public function logout(){
        $_SESSION['name'] = "";
        session_abort();
        header($_SERVER["HTTP_HOST"]);
        return true;
    }

        public function register($name, $email, $password, $dubl_password){
        $this->user_name = trim($name);
        $this->user_email = trim($email);
//        $this->user_password = hash('sha256', $password);
//        $this->dubl_password = hash('sha256', $dubl_password);
        $this->user_password = trim($password);
        $this->dubl_password = trim($dubl_password);
        $this->user_date = date("Y-m-d");

        # Проводить валидизацию пароля до его хеширования, а в БД отправлять уже хешированную версию
        $result = Db::getdbconnect()->query("SELECT * FROM users WHERE name = '$this->user_name'");
        //здесь у нас процедурный стиль
        $row_cnt = $result->num_rows;
        if( $row_cnt == 1){
            echo  "имя используется";
        } elseif(Validate::validate_name($this->user_name) &&
            Validate::validate_email($this->user_email)
            &&  Validate::validate_password($this->user_password)){
            $this->user_password = hash('sha256', $this->user_password);
            $sql = "INSERT INTO users VALUES (NULL, '$this->user_name',
            '$this->user_email','$this->user_password', '$this->user_date')";
            //здесь процедурный стиль
            Db::getdbconnect()->query($sql);
            echo "<h1>Вы успешно зареганы </h1>
        <script>
            setTimeout(()=>{
                window.location.assign('http://localhost/admin');
            }, 2000)
        </script>";
        }    else{
            echo "мда";
        }
        }

}

#login
#logout
# добавление юзера
# комментарий