<?php
require_once __DIR__ . "/../controller/ContactController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if(isset($_POST["addContact"]))
    {
        $fname = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        ContactController::handleSubmission($fname, $email, $phone, $message);
    }
}
else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if(isset($_GET["delete"]))
    {
        ContactController::deleteInquiry($_GET["delete"]);
    }
}
?>