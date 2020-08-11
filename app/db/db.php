<?php
class Connect{
    public static function connection(){
        $connection=new mysqli("db", "root", "my_secret_pw_shh", "test_db", 3306);
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}
?>
