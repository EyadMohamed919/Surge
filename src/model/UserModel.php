<?php
class UserModel
{
    private $db;
    private $fname;
    private $lname;
    private $email;
    private $password;

    public function __construct($dbConnection = null)
    {
        $this->db = $dbConnection;
    }

    public function getFname() { return $this->fname; }
    public function setFname($fname) { $this->fname = $fname; }

    public function getLname() { return $this->lname; }
    public function setLname($lname) { $this->lname = $lname; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }

    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    public function createUser()
    {
        $sql = "INSERT INTO users (fname, lname, email, password) VALUES (:fname, :lname, :email, :password)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'fname'    => $this->fname,
            'lname'    => $this->lname,
            'email'    => $this->email,
            'password' => password_hash($this->password, PASSWORD_BCRYPT)
        ]);
    }
}
?>