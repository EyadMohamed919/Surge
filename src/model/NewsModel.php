<?php
require_once __DIR__ . "/../../config/DatabaseConnection.php";

class NewsModel
{
    private $conn;

    private $id;
    private $title;
    private $date;
    private $image;
    private $description;

    public function __construct()
    {
        $this->conn = getConnection();
    }


    public function getID() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getDate() { return $this->date; }
    public function getImage() { return $this->image; }
    public function getDescription() { return $this->description; }

    public function createNewsObject($id, $title, $date, $image, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->image = $image;
        $this->description = $description;
        return $this;
    }

    public function getAllNews()
    {
        $newsArray = array();
        $stmt = $this->conn->prepare("SELECT * FROM news ORDER BY date DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $news = new NewsModel();
                $news->createNewsObject(
                    $row["id"],
                    $row["title"],
                    $row["date"],
                    $row["image"],
                    $row["description"]
                );
                $newsArray[] = $news;
            }
        }
        return $newsArray;
    }

    public function getFourNews()
    {
        $newsArray = array();
        $stmt = $this->conn->prepare("SELECT * FROM news ORDER BY date DESC LIMIT 4");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $news = new NewsModel();
                $news->createNewsObject(
                    $row["id"],
                    $row["title"],
                    $row["date"],
                    $row["image"],
                    $row["description"]
                );
                $newsArray[] = $news;
            }
        }
        return $newsArray;
    }

    public function getNewsById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->createNewsObject(
                $row["id"],
                $row["title"],
                $row["date"],
                $row["image"],
                $row["description"]
            );
            return $this;
        }
        return 0;
    }

    public function createNews($title, $date, $image, $description)
    {
        $stmt = $this->conn->prepare("INSERT INTO news (title, date, image, description) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $date, $image, $description);
        return $stmt->execute();
    }

    public function updateNews($id, $title, $date, $image, $description)
    {
        $stmt = $this->conn->prepare("UPDATE news SET title = ?, date = ?, image = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $title, $date, $image, $description, $id);
        return $stmt->execute();
    }

    public function deleteNews($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>