<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <title>Giao Diện</title>
</head>
<body>
    <?php include 'tabbarSong.php'; ?>
  <div class="container mt-4">
    <h3>Chỉnh sửa thông tin bài hát</h3>
    <form>
      <!-- Các trường thông tin của bài hát cần chỉnh sửa -->
      <div class="form-group">
        <label for="editSongName">Tên bài hát</label>
        <input type="text" class="form-control" id="editSongName">
      </div>
      <!-- Các trường thông tin khác -->

      <button type="submit" class="btn btn-primary my-2">Lưu chỉnh sửa</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>