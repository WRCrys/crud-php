<?php

class ConnectionTest {

    public function connectDB() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
              echo 'ERROR: ' . $e->getMessage();
          }
    }

}