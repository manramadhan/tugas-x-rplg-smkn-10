<?php

include_once('DB.php');

class SCORE extends DB {
    public static function all()
    {
        return parent::connect() ->query("SELECT * FROM scores") ->fetch_all(MYSQLI_ASSOC);
    }
}

?>