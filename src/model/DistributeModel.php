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
    private $date;

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
    public function getDate() { return $this->date; }

    public function createLeadObject($id, $fname, $lname, $email, $phone, $cname, $cwebsite, $message, $date)
    {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->cname = $cname;
        $this->cwebsite = $cwebsite;
        $this->message = $message;
        $this->date = $date;
        return $this;
    }

    public static function getLeadCount()
    {
        $stmt = getConnection()->prepare("SELECT count(id) as count FROM leads");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc()["count"];
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
                $row["message"],
                $row["created_at"]
            );
        }
        return $leads;
    }

    public function getTwoLeads()
    {
        $leads = array();
        $stmt = $this->conn->prepare("SELECT * FROM leads ORDER BY id DESC LIMIT 2");
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
                $row["message"],
                $row["created_at"]
            );
        }
        return $leads;
    }

    public function getLeadByID($id)
    {
        $leads = array();
        $stmt = $this->conn->prepare("SELECT * FROM leads WHERE id = ? ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc(); 
            $lead = $this->createLeadObject(
                $row["id"],
                $row["fname"],
                $row["lname"],
                $row["email"],
                $row["phone"],
                $row["cname"],
                $row["cwebsite"],
                $row["message"],
                $row["created_at"]
            );

            return $lead;
        }

        return 0;
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