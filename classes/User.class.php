<?php

require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/connect.inc.php";
require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/classes/db.php";

class User
{
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_date; #Дата регистрации пользователя
    protected $pattern_name = '/\w{3,}/';
    protected $pattern_mail = '/\w+@\w+\.\w+/';

    public function login($user_name, $user_password)
    {
        $this->user_name = trim($user_name);
        $this->user_password = hash('sha256', $user_password);

        $login_query = Db::getdbconnect()->query("SELECT FROM users WHERE Name = '$this->user_name'");

        $user = Db::getdbconnect()->fetch_array($login_query);

        if ($this->user_password == $user['Password']) {
            session_start();

            $_SESSION['name'] = $this->user_name;

        } else {
            return "Нет пользователя с таким именем";
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
        $this->user_password = hash('sha256', $password);
        $this->dubl_password = hash('sha256', $dubl_password);
        $this->user_date = date("d-m-Y");

        # Проводить валидизацию пароля до его хеширования, а в БД отправлять уже хешированную версию
        $result = Db::getdbconnect()->query("SELECT * FROM users WHERE Name = '$this->user_name'");
        //здесь у нас процедурный стиль
        $row_cnt = $result->num_rows;
        if( $row_cnt == 1){
            echo  "имя используется";
        } elseif(preg_match($this->pattern_name, $this->user_name) &&
            preg_match($this->pattern_mail, $this->user_email)
            &&  $this->user_password == $this->dubl_password){
            $sql = "INSERT INTO users VALUES (NULL, '$this->user_name',
            '$this->user_email','$this->user_password', '$this->user_date')";
            //здесь процедурный стиль
            db::getdbconnect()->query($sql);
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