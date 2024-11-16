<?php

class BaseModel
{
    public $conn = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=g10_store; charset=utf8; port=3306", "root", "");
        } catch (PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
        }
    }
}