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
            header("Location: ../../login.php?error=invalid_credentials");
            exit();
        }
    }

    public static function register($fname, $lname, $email, $password)
    {
        $userModel = new UserModel();

        $user = $userModel->getUserByEmailOnly($email, $password);
        if(!$user)
        {
            $userModel->createUser($fname, $lname, $email, $password);
            header("Location: ../../settings.php");
        }
        else
        {
            header("Location: ../../settings.php");
        }
    }

    public static function deleteUser($id)
    {
        $userModel = new UserModel();
        if($userModel->deleteUser($id))
        {
            header("Location: ../../settings.php");
        }
        else
        {
            header("Location: ../../settings.php?status=error");
        }

    }
}
?>
