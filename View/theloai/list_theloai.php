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
    <h3>Danh sách bài hát</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Thể loại</th>
          <th scope="col">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Thể loại 1</td>
          <td>
            <a href="#">Chỉnh sửa</a> |
            <a href="#">Xóa</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Bài hát 2</td>
          <td>
            <a href="#">Chỉnh sửa</a> |
            <a href="#">Xóa</a>
          </td>
        </tr>
        <!-- Danh sách các bài hát khác -->
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>