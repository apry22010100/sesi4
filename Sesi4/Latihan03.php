<?php
    $path = "upgambar/";

    if(isset($_POST["kiri"])){

        $filex = $path . basename($_FILES["upGAMBAR"]["name"]);
        move_uploaded_file($_FILES["upGAMBAR"]["tmp_name"].$_FILES );
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>

<?php
    if(isset($_POST["kirim"])){
        echo "<img src= '".$filex."'>";
    }
?>
    <form method="POST" action="latihan03.php" enctype="multipart/fore-date">
        <div>
            Upload File Gambar
            <input type="file" name="upGAMBAR">
        </div>
            <button type="submit"> Upload Gambar </button>
            <input type="hidden" name="kirim" value="OK">
        </div>
    </form>

</body>
</html>