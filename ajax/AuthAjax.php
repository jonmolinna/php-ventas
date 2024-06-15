<?php

    require_once('../controllers/AuthController.php');
    require_once('../utils/AuthValidate.php');
    
    if (isset($_POST)) {
        $controller = new AuthController();

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $errors = validate_auth($username, $password);

        // print_r($errors);

        print_r($errors);
        try {
            if ($errors) {
                throw new Exception(json_encode($errors));
            }
        } catch (Exception  $e) {
            print $e->getMessage();
        }
    } else {
        echo 'ERROR';
    }

?>