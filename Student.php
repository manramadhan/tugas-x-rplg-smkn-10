<?php

include_once('DB.php');

class Student extends DB {
    public static function all()
    {
        return parent::connect() ->query("SELECT * FROM students") ->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id) {
        return parent::connetc() ->query("SELECT * FROM student WHERE id = '$id") ->fetch_assoc();
    }

    public static function create($data)
    {
        $name = $data['name'];

        perent::connect() ->query("INSERT INTO student (name) VALUES ('$name')");

        $insert_id = parent::$koneksi ->insert_id;

        return Student::find($insert_id);
    }
}

?>