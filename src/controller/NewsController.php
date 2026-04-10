<?php
require_once __DIR__ . "/../models/NewsModel.php";
require_once __DIR__ . "/../services/FileUploadService.php";

class NewsController
{
    public static function createNews($title, $date, $description, $fileData)
    {
        $fileService = new FileUploadService();
        $newsModel = new NewsModel();

        $uploadedFileName = $fileService->uploadImage($fileData);

        if ($uploadedFileName) {
            $success = $newsModel->createNews($title, $date, $uploadedFileName, $description);

            if ($success) {
                header("Location: ../adminNews.php?status=success");
                exit();
            }
        }

        header("Location: ../adminNews.php?status=error");
        exit();
    }
}