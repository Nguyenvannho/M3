<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
    #date1 {
        width: 97%;
    }

    .error {
        color: #FF0000;
    }

    #table2 {
        text-align: center;
        border-collapse: collapse;
        width: 1500px;
        border: solid 1px #ccc;
    }

    form {
        width: 450px;
    }
    </style>
    <form action="index.php?controller=product&action=update&id=<?php echo  $item['id']?>" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Tên Sản Phẩm</td> 
        <td><input type="text" class="form-control" name="name" value="<?= $item['name'];?>"></td>
    </tr>
    <tr>
        <td>Mã Sản Phẩm</td> 
       <td> <select name="category_id" class="form-control">
      <?php foreach( $category as $row ): ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
      <?php endforeach; ?>
      </select></td>
    </tr>
    <tr>
        <td>Giá Tiền</td> 
        <td><input type="text" class="form-control" name="price" value="<?= $item['price'];?>"></td>
    </tr>
    <tr>
        <td>Số Lượng Sản Phẩm</td> <br>
        <td><input type="text"  class="form-control" name="quantity" value="<?= $item['quantity'];?>"></td>
    </tr>
    <tr>
        <td>Mô Tả Sản Phẩm</td> <br>
        <td><input type="text"  class="form-control" name="description"value="<?= $item['description'];?>"></td>
    </tr>
    <tr>
        <td>Ảnh:</td> <br>
        <td><input type="file"  class="form-control" name="image" value="<?= $item['image'];?>"></td>
    </tr>
    <tr>
        <td>Trạng Thái</td> <br>
        <td><input type="radio"   name="status"  value="<?= 1?>" checked>Tắt
        <input type="radio"   name="status"  value="<?= 0?>">Bật</td>
    </tr>
   
    <tr>
    <td><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
    </table>
    </form>
</body>
</html>