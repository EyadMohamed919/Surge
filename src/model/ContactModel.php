<?php 
require_once __DIR__ . "/../../config/DatabaseConnection.php";
class ContactModel{
    private $name;
    private $email;
    private $phone;
    private $message;

    public function __construct()
    {
        $conn = getConnection();
    }

    public function getAllContacts()
    {
        
    }

}
?>