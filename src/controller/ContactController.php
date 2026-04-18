<?php
require_once __DIR__ . "/../model/ContactModel.php";
require_once __DIR__ . "/../model/UserModel.php";
require_once __DIR__ . "/../service/EmailService.php";
class ContactController {
    public static function handleSubmission($fname, $email, $phone, $message) {
        $model = new ContactModel();

        $success = $model->createInquiry($fname, $email, $phone, $message);

        if ($success) {
            $userModel = new UserModel();
            $userArray = $userModel->getAllUsers();
            foreach($userArray as $user)
            {
                EmailService::sendContactMail($user->getUserEmail(), $fname, $message);
            }
            header("Location: ../../contact.php?status=success");
        } else {
            header("Location: ../../contact.php?status=failed");
        }
        exit();
    }

    public static function deleteInquiry($id)
    {
        $model = new ContactModel();
        $contact = $model->getContactByID($id);
        if($contact)
        {
            if($model->deleteInquiry($id))
            {
                header("Location: ../../adminContact.php?status=success");
            }
            else
            {
                header("Location: ../../adminContact.php?status=failed");
            }
        }
        else
        {
            header("Location: ../../adminContact.php?status=failed");
        }
    }
}