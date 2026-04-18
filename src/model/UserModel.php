<?php
require_once __DIR__ . "/../../config/DatabaseConnection.php";

class UserModel
{
    private $conn;

    private $userID;
    private $userFName;
    private $userLName;
    private $userEmail;
    private $userPassword;

    public function __construct()
    {
        $this->conn = getConnection();
    }

    public function getUserID() { return $this->userID; }
    public function getUserFName() { return $this->userFName; }
    public function getUserLName() { return $this->userLName; }
    public function getUserEmail() { return $this->userEmail; }
    public function getUserPassword() { return $this->userPassword; }

    public function createUserObject($userID, $userFName, $userLName, $userEmail, $userPassword)
    {
        $this->userID = $userID;
        $this->userFName = $userFName;
        $this->userLName = $userLName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        return $this;
    }

    public static function getAllUsers()
    {
        $userArray = array();
        $stmt = getConnection()->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new UserModel();
                $user->createUserObject(
                    $row["id"], 
                    $row["fname"], 
                    $row["lname"], 
                    $row["email"], 
                    $row["password"]
                );
                $userArray[] = $user;
            }
        }
        return $userArray;
    }

    public function getUserById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->createUserObject(
                $row["id"], 
                $row["fname"], 
                $row["lname"], 
                $row["email"], 
                $row["password"]
            );
            return $this;
        }
        return 0;
    }

    public function getUserByEmail($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row["password"])) {
                
                $this->createUserObject(
                    $row["id"], 
                    $row["fname"], 
                    $row["lname"], 
                    $row["email"], 
                    $row["password"]
                );
                return $this;
            }
        }

        return 0;
    }

    public function getUserByEmailOnly($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $this->createUserObject(
                $row["id"], 
                $row["fname"], 
                $row["lname"], 
                $row["email"], 
                $row["password"]
            );
            return $this;
        }

        return 0;
    }

    public function createUser($fname, $lname, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->conn->prepare("INSERT INTO user (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPassword);
        return $stmt->execute();
    }

    public function deleteUser($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM user WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>