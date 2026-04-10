<?php
require_once __DIR__ . "/../model/NewsModel.php";
require_once __DIR__ . "/../service/FileUploadService.php";

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
                header("Location: ../../adminNews.php?status=success");
                exit();
            }
        }

        header("Location: ../../adminNews.php?status=error");
        exit();
    }

    public static function deleteNews($id)
    {
        $newsModel = new NewsModel();
        if($newsModel->deleteNews($id))
        {
            header("Location: ../../adminNews.php");
        }
        else
        {
            header("Location: ../../adminNews.php?status=error");
        }

    } 

    public static function updateNews($id, $title, $date, $description, $newFileData = null)
    {
        $fileService = new FileUploadService();
        $newsModel = new NewsModel();

        $currentNews = $newsModel->getNewsById($id);
        if (!$currentNews) {
            header("Location: ../adminNews.php?status=notfound");
            exit();
        }

        $imageToSave = $currentNews->getImage(); // Default to current image

        if ($newFileData && $newFileData['error'] === UPLOAD_ERR_OK) {
            $newFileName = $fileService->uploadImage($newFileData);
            
            if ($newFileName) {
                $fileService->deleteImage($currentNews->getImage());
                $imageToSave = $newFileName;
            }
        }

        $success = $newsModel->updateNews($id, $title, $date, $imageToSave, $description);

        if ($success) {
            header("Location: ../../adminNews.php?status=updated");
        } else {
            header("Location: ../../adminNews.php?status=error");
        }
        exit();
    }
}
