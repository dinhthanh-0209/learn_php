
<!DOCTYPE html>
<html>
<head>
    <title>Upload File PHP</title>
</head>
<body>
    <h1>Tải lên tập tin hình ảnh</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" name="submit" value="Tải lên">
    </form>

    <h2>Hình ảnh đã tải lên:</h2>
    <div id="uploaded-image">
        <!-- Hiển thị hình ảnh tải lên ở đây -->
    </div>
</body>
</html>



