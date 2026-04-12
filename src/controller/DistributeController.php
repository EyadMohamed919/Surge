<?php
require_once __DIR__ . "/../models/DistributeModel.php";

class DistributeController
{
    public static function submitApplication($fname, $lname, $email, $phone, $cname, $cwebsite, $message)
    {
        $leadModel = new DistributeModel();

        $success = $leadModel->createLead($fname, $lname, $email, $phone, $cname, $cwebsite, $message);

        if ($success) {
            header("Location: ../../distribute.php?status=success");
        } else {
            header("Location: ../../distribute.php?status=error");
        }
        exit();
    }
}