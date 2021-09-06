<?php

namespace application\models;

use application\core\Model;

class Entrant extends Model {

    public $error;

    public function postsCount() {
        return $this->db->column('SELECT COUNT(*) FROM posts WHERE status = "entrant"');
    }
    public function usersCount() {
        return $this->db->column('SELECT COUNT(id) FROM users');
    }

    public function postsList($route) {
        $max = 10;
        $status = 'entrant';
        $params = [
            'max' => $max,
            'start' => ((($route['page'] ?? 1) - 1) * $max),
            'status' => $status,
        ];
        return $this->db->row('SELECT * FROM posts WHERE status = :status ORDER BY id DESC LIMIT :start, :max ', $params);
    }

//    public function usersList($route) {
//        $max = 10;
//        $params = [
//            'max' => $max,
//            'start' => ((($route['page'] ?? 1) - 1) * $max),
//        ];
//        return $this->db->row('SELECT * FROM users ORDER BY id DESC LIMIT :start, :max', $params);
//    }


}