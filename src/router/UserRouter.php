<?php 
require_once __DIR__ . "/../controller/UserController.php";
if(isset($_POST))
{
    if(isset($_POST["login"]))
    {
        UserController::login($_POST["email"], $_POST["password"]);
    }
    else if(isset($_POST["addUser"]))
    {
        UserController::register($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["password"]);
    }
}
?>