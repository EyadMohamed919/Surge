<?php
require_once __DIR__ . "/../model/ContactModel.php";

class ContactController {
    public static function handleSubmission($fname, $email, $phone, $message) {
        $model = new ContactModel();

        $success = $model->createInquiry($fname, $email, $phone, $message);

        if ($success) {
            header("Location: ../../contact.php?status=sent");
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
                header("Location: ../../adminContact.php?status=sent");
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