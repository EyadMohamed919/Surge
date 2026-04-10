<?php
require_once __DIR__ . "/../../config/DatabaseConnection.php";

class NewsModel
{
    private $conn;

    private $newsID;
    private $newsTitle;
    private $newsDate;
    private $newsImage;
    private $newsDescription;

    public function __construct()
    {
        $this->conn = getConnection();
    }

    // Getters
    public function getNewsID() { return $this->newsID; }
    public function getNewsTitle() { return $this->newsTitle; }
    public function getNewsDate() { return $this->newsDate; }
    public function getNewsImage() { return $this->newsImage; }
    public function getNewsDescription() { return $this->newsDescription; }

    public function createNewsObject($newsID, $newsTitle, $newsDate, $newsImage, $newsDescription)
    {
        $this->newsID = $newsID;
        $this->newsTitle = $newsTitle;
        $this->newsDate = $newsDate;
        $this->newsImage = $newsImage;
        $this->newsDescription = $newsDescription;
        return $this;
    }

    public function getAllNews()
    {
        $newsArray = array();
        $stmt = $this->conn->prepare("SELECT * FROM news ORDER BY newsDate DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $news = new NewsModel();
                $news->createNewsObject(
                    $row["newsID"],
                    $row["newsTitle"],
                    $row["newsDate"],
                    $row["newsImage"],
                    $row["newsDescription"]
                );
                $newsArray[] = $news;
            }
        }
        return $newsArray;
    }

    public function getFourNews()
    {
        $newsArray = array();
        $stmt = $this->conn->prepare("SELECT * FROM news ORDER BY newsDate DESC LIMIT 4");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $news = new NewsModel();
                $news->createNewsObject(
                    $row["newsID"],
                    $row["newsTitle"],
                    $row["newsDate"],
                    $row["newsImage"],
                    $row["newsDescription"]
                );
                $newsArray[] = $news;
            }
        }
        return $newsArray;
    }

    public function getNewsById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM news WHERE newsID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->createNewsObject(
                $row["newsID"],
                $row["newsTitle"],
                $row["newsDate"],
                $row["newsImage"],
                $row["newsDescription"]
            );
            return $this;
        }
        return 0;
    }

    public function createNews($title, $date, $image, $description)
    {
        $stmt = $this->conn->prepare("INSERT INTO news (newsTitle, newsDate, newsImage, newsDescription) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $date, $image, $description);
        return $stmt->execute();
    }

    public function updateNews($id, $title, $date, $image, $description)
    {
        $stmt = $this->conn->prepare("UPDATE news SET newsTitle = ?, newsDate = ?, newsImage = ?, newsDescription = ? WHERE newsID = ?");
        $stmt->bind_param("ssssi", $title, $date, $image, $description, $id);
        return $stmt->execute();
    }

    public function deleteNews($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM news WHERE newsID = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>