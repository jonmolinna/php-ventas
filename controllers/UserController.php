<?php

    require_once('../models/UsersModel.php');

    class UserController {
        private $model;

        public function __construct() {
            $this->model = new UsersModel();
        }

        public function get_user($username = '') {
            return $this->model->get($username);
        }
    }




?>