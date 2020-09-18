<?php

class User
{
    public $id, $username, $age, $birtday, $active;

    public function __construct($id, $username, $age,$birtday, $active)
    {
        $this->id = $id;
        $this->username = $username;
        $this->age = $age;
        $this->birtday = $birtday;
        $this->active = $active;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "id: " . $this->id . ", name: " . $this->username . ", age: " . $this->age . ", active: " . $this->active;
    }

    static function showALl(array $users) {
        foreach ($users as $user) {
            echo $user . "<br>";
        }
    }
}

try {
    $db = new PDO('mysql:host=localhost;dbname=leuleu', 'root', 'root');
    try {
        $result = $db->query("SELECT * FROM users WHERE age=(SELECT MAX(age) FROM users)");

        echo "User co tuoi cao nhat: <br>";
        if($result) {
            $list = [];
            foreach ($result->fetchAll() as $user) {
                $newUser = new User($user['id'], $user['username'], $user['age'], $user['birtday'], $user['active']);
                array_push($list, $newUser);
            }
            User::showALl($list);           // show ra tat ca $user co tuoi lon nhat
        }
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

    try {
        $result = $db->query("delete from users order by age desc limit 1");
        if ($result)
            echo "Da xoa user co tuoi thap nhat";
        else
            echo "Xoa that bai!";
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

    try {
//        $db->query('insert into users(username, age, birtday) values ("Namenew", 90, "1955-10-10")');
        $result = $db->query("update users set active=2 order by age desc limit 1");
        if ($result)
            echo "<br>Da update nguoi dung co tuoi lon nhat active = 2";
        else
            echo "Update that bai!";
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

} catch (PDOException $e) {
    print_r($e->getMessage());
}
