<?php

$password = $_POST["password"];
$login = $_POST["login"];
$user_data = $login ." ". $password;
//echo "$user_data";

class  User
{
    public $name;
    public $surname;
    public $role;
    public $pass;
    public $log;


}

class Admin extends User
{
    function  __construct()
    {
        $this->pass = "fesflseesf";
        $this->log = "Admin1";
        $this->role = "Админ";
        $this->name = "Аня";
        $this->surname = "Минина";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
//Здравствуйте админ Аня Минина. Вы можете на сайте делать всё
}


class Client extends User
{
    function  __construct()
    {
        $this->pass = "seifijeks";
        $this->log = "Client1";
        $this->role = "Клиент";
        $this->name = "Гриша";
        $this->surname = "Пушкин";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
//Здравствуйте клиент Гриша Пушкин. Вы можете на сайте просматривать информацию доступную пользователям
}


class Manager extends User
{
    function  __construct()
    {
        $this->pass = "feddrgdgdr";
        $this->log = "Manageer1";
        $this->role = "Менеджер";
        $this->name = "Иван ";
        $this->surname = "Иванов";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }
//Здравствуйте клиент Иван Иванов. Вы можете на сайте просматривать информацию доступную пользователям
}

if ($login == "Admin1" and $password == "fesflseesf") {
    $adm = new Admin();
    $adm -> printInfo();
}
elseif ($login == "Client1" and $password == "seifijeks") {
    $cli = new Client();
    $cli -> printInfo();
}
elseif ($login == "Manageer1" and $password == "feddrgdgdr") {
    $man = new Manager();
    $man -> printInfo();
}else {
    echo "Неверный логин или пароль";
}


?>