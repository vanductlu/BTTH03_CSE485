<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button a
        {
            color: aliceblue;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php include 'tabbarHomeView.php'; ?>
<div class="container d-flex justify-content-center align-content-center">
    <button type="submit" class="btn btn-success m-2"><a href="baihat/listSong.php"> Thêm mới bài hát</a></button>
    <button type="submit" class="btn btn-success m-2"><a href="theloai/list_theloai.php"> Thêm mới thể loại</a></button>
    </div>
</body>
</html>