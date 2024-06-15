<?php

    require_once('../models/UsersModel.php');
    require_once('../utils/AuthValidate.php');

    class AuthModels {
        private $model;

        public function __construct() {
            $this->model = new UsersModel();
        }

        public function authentication($email, $password) {
            
        }

    }


?>