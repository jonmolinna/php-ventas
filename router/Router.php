<?php

    class Router {
        public function __construct() {
            $_HI = false;

            if ($_HI) {
                echo 'Estas Logeado';
            } else {
                $controller = new ViewController();
                $controller->load_view('login');
            }
        }
    }


?>

