<?php

    require_once('../models/Model.php');

    class UsersModel extends Model {
        public function get($username = '' ){
            $this->query = $username != "" ? "SELECT * FROM users WHERE username = '$username'" : "SELECT * FROM users";
            $this->get_query();

            $data = array();

            foreach($this->rows as $key => $value) {
                array_push($data, $value);
            }

            return $data;
        }

        public function add() {}
        public function update() {}
        public function delete() {}
    }


?>