<?php

abstract class Connection {

    protected function connectDB() {
        try {
            $con = new PDO("mysql:host=localhost;dbname=crud","root","camaro");
            return $con;
        } catch (PDOException $error) {
            //throw $error;
            return $error->getMessage();
        }
    }

}