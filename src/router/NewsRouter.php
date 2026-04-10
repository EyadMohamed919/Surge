<?php 
require_once __DIR__ . "/../controller/NewsController.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if(isset($_POST["addNews"]))
    {
        $title = $_POST['title'] ?? '';
        $date = $_POST['date'] ?? '';
        $desc = $_POST['description'] ?? '';
        $image = $_FILES['image'] ?? null;
        NewsController::createNews($title, $date, $desc, $image);
    }
    else if(isset($_POST["editNews"]))
    {
        $id = $_POST['id'];
        $title = $_POST['title'] ?? '';
        $date = $_POST['date'] ?? '';
        $desc = $_POST['description'] ?? '';
        $image = $_FILES['image'] ?? null;
        NewsController::updateNews($id, $title, $date, $desc, $image);
    }

}
else if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    if(isset($_GET["delete"]))
    {
        NewsController::deleteNews($_GET["delete"]);
    }
}

?>