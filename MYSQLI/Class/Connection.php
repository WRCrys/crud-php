<?php

abstract class Connection {

    protected function connectDB() {
        try {
            $con = new mysqli("localhost", "root", "camaro", "crud");
            return $con;
        } catch (Exception $error) {
            //throw $error;
            return $error->getMessage();
        }
    }

}