<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contaner">
    <div class="row">
<form action="index.php?controller=customer&action=store" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Họ Tên</label>
    <input type="text" class="form-control" name="name" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control" name="address" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giới Tính</label>
    <select name="pay">
    <option value="">--Chọn--</option>
    <option value="0" selected="selected">Nữ</option>
    <option value="1">Nam</option>
</select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Số Điện Thoại</label>
    <input type="number" class="form-control" name="phone" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
          <label for="" class="form-label">Ảnh</label>
          <input type="file" class="form-control" name="image" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>