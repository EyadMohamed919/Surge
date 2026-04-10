<?php
class FileUploadService
{
    private $targetDir;

    public function __construct($targetDir = "../../public/uploads/news/")
    {
        $this->targetDir = $targetDir;
        
        if (!is_dir($this->targetDir)) {
            mkdir($this->targetDir, 0777, true);
        }
    }

    public function uploadImage($file)
    {
        if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $fileName = time() . "_" . basename($file["name"]);
        $targetPath = $this->targetDir . $fileName;

        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            return $fileName;
        }

        return false;
    }
}