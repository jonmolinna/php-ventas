<?php

    require_once('../models/AuthModels.php');

    class AuthController {
        private $model;

        public function __construct() {
            $this->model = new  AuthModels();
        }

        public function authentication($username, $password) {
            return $this->model->authentication($username, $password);
        }
    }

?>