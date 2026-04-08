<?php
require_once __DIR__ . "/../model/UserModel.php";
class UserController{
    public static function login($email, $password)
    {
        $userModel = new UserModel();

        $user = $userModel->getUserByEmail($email, $password);

        if ($user !== 0) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['isLoggedIn'] = true;
            $_SESSION['userID'] = $user->getUserID();
            $_SESSION['userEmail'] = $user->getUserEmail();
            $_SESSION['userFName'] = $user->getUserFName();

            header("Location: ../../dashboard.php");
            exit();
        } else {
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    }
}
?>
