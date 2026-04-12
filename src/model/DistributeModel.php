<?php
require_once __DIR__ . "/../../config/DatabaseConnection.php";

class DistributeModel
{
    private $conn;

    private $id;
    private $fname;
    private $lname;
    private $email;
    private $phone;
    private $cname;
    private $cwebsite;
    private $message;

    public function __construct()
    {
        $this->conn = getConnection();
    }

    public function getId() { return $this->id; }
    public function getFname() { return $this->fname; }
    public function getLname() { return $this->lname; }
    public function getEmail() { return $this->email; }
    public function getPhone() { return $this->phone; }
    public function getCname() { return $this->cname; }
    public function getCwebsite() { return $this->cwebsite; }
    public function getMessage() { return $this->message; }

    public function createLeadObject($id, $fname, $lname, $email, $phone, $cname, $cwebsite, $message)
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->cname = $cname;
        $this->cwebsite = $cwebsite;
        $this->message = $message;
        return $this;
    }

    public function getAllLeads()
    {
        $leads = array();
        $stmt = $this->conn->prepare("SELECT * FROM leads ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $lead = new DistributeModel();
            $leads[] = $lead->createLeadObject(
                $row["id"],
                $row["fname"],
                $row["lname"],
                $row["email"],
                $row["phone"],
                $row["cname"],
                $row["cwebsite"],
                $row["message"]
            );
        }
        return $leads;
    }

    public function createLead($fname, $lname, $email, $phone, $cname, $cwebsite, $message)
    {
        $stmt = $this->conn->prepare("INSERT INTO leads (fname, lname, email, phone, cname, cwebsite, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fname, $lname, $email, $phone, $cname, $cwebsite, $message);
        return $stmt->execute();
    }

    public function deleteLead($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM leads WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>