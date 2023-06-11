<?php

class Model{
    private static $db;

    public static function getdb(){
        $user = 'root';
        $host = 'localhost';
        $port = '3306';
        $dbname = 'center';
        $ps = '';
        $dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname;


        try{
            if(!isset(self::$db))
                self::$db = new PDO($dsn,$user,$ps);

            return self::$db;
        }catch(Exception $e){
            echo 'Error : ' . $e->getMessage();
            die();
        }
    }

    public static function execreq($sql,$params=[]){
        $con = self::getdb();
        $stm = $con->prepare($sql);
        $stm->execute($params);

        return $stm;
    }
}