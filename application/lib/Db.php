<?php

namespace application\lib;


use PDO;

class Db {

    public $db;

    public function __construct() {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
    }


    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql, array());
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                } else {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':' . $key, $val, $type);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
    public function columncount($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->columnCount();
    }
    public function rowcount($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->rowCount();
    }

    public function lastInsertId() {
        return $this->db->lastInsertId();
    }

}
