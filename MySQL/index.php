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
            var_dump($result->fetchAll());
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
        // xoa user co tuoi thap nhat
        $result = $db->query("SELECT id FROM users ORDER BY age limit 1");
        if ($result) {
            $id = $result->fetchAll()[0];
            $delete = $db->query("DELETE FROM users WHERE id = " . $id['id']);
            echo "Da xoa user co tuoi thap nhat";
        }        else
            echo "Xoa that bai!";
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

    try {
        $result = $db->query("SELECT id FROM users ORDER BY age DESC limit 1");
        if ($result) {
            $id = $result->fetchAll()[0];
            $result = $db->query("update users set active=2 WHERE id = " . $id['id']);
            echo "<br>Da update nguoi dung co tuoi lon nhat active = 2 voi id = " . $id['id'];
        }else
            echo "Update that bai!";
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

} catch (PDOException $e) {
    print_r($e->getMessage());
}
