<?php

    require_once('../controllers/UserController.php');

    function validate_auth($username, $password) {
        $message = "";
        $username_variables = array("admin" => "admin", "ventas" => "ventas", "caja" => "caja");

        if (empty($username)) {
            $message = "Credenciales Incorrectas";
        }
        else if (empty($password)) {
            $message = "Credenciales Incorrectas";
        }
        else if (!in_array(trim(strtolower($username)), $username_variables, true)) {
            $message = "Credenciales Incorrectas";
        }
        else if (!empty($username) && !empty($password)) {
            $controller = new UserController();
            $user = $controller->get_user($username);

            print_r($user);
            if(!$user) {
                $message = "Credenciales Incorrectas";
            }
            else if ($user[0]['password'] != $password) {
                $message = "Contraseña incorrecto";
            }
        }

        return ["message" => $message, "statusCode"=> 400, "error"=> empty(!$message)];
    }


?>