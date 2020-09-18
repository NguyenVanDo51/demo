<?php

class Course
{
    public $id;
    public $name;
    public $img;
    public $description;

    function __construct($id, $name, $img, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->description = $description;
    }

    static function all()
    {
        $list = [];

        try {
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM courses');

            // Neu bang false tuc la ko lay dc du lieu => thoat
            if (!$req) {
                return $list;
            }

            foreach ($req->fetchAll() as $index => $item) {
                $list[$index] = new Course($item['id'], $item['name'], $item['img'], $item['description']);
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        return $list;
    }
}