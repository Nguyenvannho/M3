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
      <form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
      <div class="mb-3">
          <label for="" class="form-label">Tên</label>
          <input type="text" class="form-control" name="name" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Danh Mục Sản Phẩm</label>
          <!-- <input type="text" class="form-control" name="category_id" aria-describedby=""> -->
          <select name="category_id" class="form-control">
      <?php foreach( $items as $category ): ?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
      <?php endforeach; ?>
      </select>
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Giá Tiền</label>
          <input type="text" class="form-control" name="price" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Số Lượng</label>
          <input type="text" class="form-control" name="quantity" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mô Tả</label>
          <input type="text" class="form-control" name="description" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Ảnh</label>
          <input type="file" class="form-control" name="image" aria-describedby="">
          <div id="" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Trạng Thái</label>
          <div id="" class="form-text"></div>
        </div>
        <select name="status" class="form-control"> 
                 <option value="0">Bật</option>
                    <option value="1">Tắt</option>
            </select> <br>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
    </div>
  </div>
</body>
</html>