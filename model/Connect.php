<?php

namespace Model;

abstract class Connect{

    const HOST = "localhost";
    const DB = "cinema";
    const USER = "root";
    const MDP = "";

    public static function seConnecter(){
        try{
            return new \PDO("mysql:host=".self::HOST.";dbname=".self::DB.";charset=utf8", self::USER, self::MDP);
        }
        catch( \PDOException $ex ){
            return $ex -> getMessage();
        }
    }
}