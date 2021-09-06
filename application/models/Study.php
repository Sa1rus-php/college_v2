<?php

namespace application\models;

use application\core\Model;

class Study extends Model {

    public $error;

    public function postsCount() {
        return $this->db->column('SELECT COUNT(*) FROM posts WHERE status = "study"');
    }
    public function usersCount() {
        return $this->db->column('SELECT COUNT(id) FROM users');
    }

    public function postsList($route) {
        $max = 10;
        $status = 'study';
        $params = [
            'max' => $max,
            'start' => ((($route['page'] ?? 1) - 1) * $max),
            'status' => $status,
        ];
        return $this->db->row('SELECT * FROM posts WHERE status = :status ORDER BY id DESC LIMIT :start, :max ', $params);
    }



}