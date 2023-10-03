<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Giao Diện</title>
</head>
<body>
    <?php include 'tabbarTheloai.php'; ?>  
    <div class="container mt-4">
        <h3>Thêm mới thể loại</h3>
        <form action="{{ route('theloai.store') }}" method="POST">
            <!-- Các trường thông tin của thể loại -->
            <div class="form-group">
                <label for="theloaiName">Tên thể loại</label>
                <input type="text" class="form-control" id="theloaiName" name="tentheloai">
            </div>
            <!-- Các trường thông tin khác -->

            <button type="submit" class="btn btn-primary my-2">Thêm mới</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>