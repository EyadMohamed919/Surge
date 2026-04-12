<?php 
require_once __DIR__ . "/../controller/DistributeController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if($_POST["addDistribute"])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $cname = $_POST['cname'];
        $cwebsite = $_POST['cwebsite'];
        $message = $_POST['message'];
        DistributeController::submitApplication($fname, $lname, $email, $phone, $cname, $cwebsite, $message);
    }
}
?>