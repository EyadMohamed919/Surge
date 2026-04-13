<?php
require_once __DIR__ . "/../../config/DatabaseConnection.php";

class ContactModel {
    private $conn;

    private $id;
    private $fname;
    private $email;
    private $phone;
    private $message;
    private $date;

    public function getId() { return $this->id; }
    public function getFname() { return $this->fname; }
    public function getEmail() { return $this->email; }
    public function getPhone() { return $this->phone; }
    public function getMessage() { return $this->message; }
    public function getDate() { return $this->date; }

    public function __construct() {
        $this->conn = getConnection();
    }

    public function createContactObject($id, $fname, $email, $phone, $message, $date) {
        $this->id = $id;
        $this->fname = $fname;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        $this->date = $date;
        return $this;
    }

    public function getContactByID($id) {
        $contact = array();
        $stmt = $this->conn->prepare("SELECT * FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);       
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $contact[] = $this->createContactObject(
                $row["id"], $row["fname"], $row["email"], $row["phone"], $row["message"], $row["created_at"]
            );
            return $contact;
        }
        else
        {
            return 0;
        }
        
        return 0;
    }

    public function getAllContact() {
        $contact = array();
        $stmt = $this->conn->prepare("SELECT * FROM contact ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $obj = new ContactModel();
            $contact[] = $obj->createContactObject(
                $row["id"], $row["fname"], $row["email"], $row["phone"], $row["message"], $row["created_at"]
            );
        }
        return $contact;
    }

    public function createInquiry($fname, $email, $phone, $message) {
        $stmt = $this->conn->prepare("INSERT INTO contact (fname, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $email, $phone, $message);
        return $stmt->execute();
    }

    public function deleteInquiry($id) {
        $stmt = $this->conn->prepare("DELETE FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}