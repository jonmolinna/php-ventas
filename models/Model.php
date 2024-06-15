<?php

    abstract class Model {
        // Atributos
        private static $db_host = 'localhost';
        private static $db_user = 'root';
        private static $db_password = 'molina125';
        private static $db_name = 'php_ventas';
        private $connection;
        protected $query;
        protected $rows = array();
        
        // Metodos Abstractos
        abstract protected function get();
        abstract protected function add();
        abstract protected function update();
        abstract protected function delete();

        // Metodos privados
        private function db_open() {
            $this->connection = new mysqli(
                self::$db_host, 
                self::$db_user, 
                self::$db_password, 
                self::$db_name
            );
        }

        private function db_close() {
            $this->connection->close();
        }

        // QUERY -> INSERT, DELETE, UPDATE
        protected function set_query() {
            $this->db_open();
            $this->connection->query($this->query);
            $this->db_close();

            // Aqui no se limpiea el resultado porque nose guarda en un variable
        }

        protected function get_query() {
            $this->db_open();

            $result = $this->connection->query($this->query);
            // fetch-assoc
            // fetch-row
            while ($this->rows[] = $result->fetch_assoc());
            // Cerrando la consulta y limpiando la memooria
            $result->close();

            $this->db_close();

            return array_pop($this->rows);
        }
    }




?>