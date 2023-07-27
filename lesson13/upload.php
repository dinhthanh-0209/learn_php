<?php
require_once 'ImageUpload.php';

$targetDir = "images"; 
$imageUpload = new ImageUpload($targetDir);

if (isset($_POST["submit"])) {
    $file = $_FILES["image"];

    
    $error = $imageUpload->checkFile($file);
    if ($error !== "") {
        echo $error;
    } else {
        $newFileName = $imageUpload->getFileName($file);

        if ($imageUpload->moveFile($file, $newFileName)) {
            echo "Tải file lên thành công.";
        } else {
            echo "Không thể tải lên file.";
        }
    }
}

$uploadedFiles = array_diff(scandir($targetDir), array('..', '.'));
if (!empty($uploadedFiles)) {
    echo "<h2>Hình ảnh đã tải lên: </h2>";
    echo "<div id='uploaded-image'>";
    foreach ($uploadedFiles as $file) {
        echo "<img src='$targetDir/$file' alt='Hình ảnh'>";
    }
    echo "</div>";
}
?>