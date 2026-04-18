<?php
require_once __DIR__ . "/../model/DistributeModel.php";
require_once __DIR__ . "/../model/UserModel.php.php";
require_once __DIR__ . "/../service/EmailService.php";
class DistributeController
{
    public static function submitApplication($fname, $lname, $email, $phone, $cname, $cwebsite, $message)
    {
        $leadModel = new DistributeModel();
        

        $success = $leadModel->createLead($fname, $lname, $email, $phone, $cname, $cwebsite, $message);
        
        if ($success) {
            $userModel = new UserModel();
            $userArray = $userModel->getAllUsers();
            foreach($userArray as $user)
            {
                EmailService::sendDistributeMail($user->getUserEmail(), $cname, $message);
            }
            header("Location: ../../distribute.php?status=success");
            
        } else {
            header("Location: ../../distribute.php?status=error");
        }
        exit();
    }

    public static function deleteApplication($id)
    {
        $leadModel = new DistributeModel();
        $lead = $leadModel->getLeadByID($id);
        if($lead)
        {
            if($leadModel->deleteLead($id))
            {
                header("Location: ../../adminDistribute.php?status=success");
            }
            else
            {
                header("Location: ../../adminDistribute.php?status=error");
            }
        }
        else
        {
            header("Location: ../../adminDistribute.php?status=error");
        }
    }
}