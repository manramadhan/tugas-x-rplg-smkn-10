<?php

include_once("DB.php");

class Student extends DB {
    public static function create($data) {
        $name = $data['name'];
        $nis = $data['nis'];
        $sql = "INSERT INTO students(name, nis) VALUES ('$name', '$nis')";

        $result = self::connect()->query($sql);

        if($result) {
            return "Berhasil menambah data";
        } 
            return "Gagal";
    }

    public static function index() {
        $sql = "SELECT * FROM students";    
        $result = self::connect()->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public static function show($id) {
        $sql = "SELECT * FROM students WHERE id = '$id'";    
        $result = self::connect()->query($sql);
        $data = $result->fetch_assoc();

        return $data;
    }
}



