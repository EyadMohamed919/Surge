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

        $originalName = basename($file["name"]);
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);

        if (empty($ext)) {
            $mimeType = $file['type'];
            $extMap = [
                'image/jpeg' => 'jpg',
                'image/png'  => 'png',
                'image/webp' => 'webp',
                'image/gif'  => 'gif'
            ];
            $ext = $extMap[$mimeType] ?? 'jpg';
        }
        
        $fileName = time() . "." . $ext;
        $targetPath = $this->targetDir . $fileName;

        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            return $fileName;
        }

        return false;
    }

    public function deleteImage($fileName)
    {
        $filePath = $this->targetDir . $fileName;
        
        if (!empty($fileName) && file_exists($filePath)) {
            return unlink($filePath);
        }
        
        return false;
    }
}