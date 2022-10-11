<?php

class ConDb {
    public static function connect()
    {
        try {
            $username = 'root';
            $password = '12345';
            return new PDO('mysql:host=localhost;dbname=oop',$username,$password);
        } catch (PDOException $e) {
            print "Error!: ". $e->getMessage() . "<br/>";
            die();
        }
    }
}