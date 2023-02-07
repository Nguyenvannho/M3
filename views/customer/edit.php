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
    <form action="index.php?controller=customer&action=update&id=<?php echo  $item['id']?>" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Tên Khách Hàng</td> 
        <td><input type="text" class="form-control" name="name" placeholder="Nhập Tên Khách Hàng" value="<?= $item['name'];?>"></td>
    </tr>
    <tr>
        <td>Địa Chỉ</td> 
        <td><input type="text" class="form-control" name="address" placeholder="Nhập Địa Chỉ" value="<?= $item['address'];?>"></td>
    </tr>
    <tr>
        <td>Giới Tính</td>
    <td>  <select id="select" name="sex" >
                                <?php
                                if($item['sex']==0){

                                ?>
                                <option selected value="0">Nữ</option>
                                <option value="1">Nam</option>
                                <?php
                                }else{   
                                ?>
                                   <option  value="0">Nữ</option>
                                    <option selected value="1">Nam</option>
                                <?php
                                }
                                ?>
                            </select>
                            </td> 
    </tr>
    <tr>
        <td>Số Điện Thoại</td> <br>
        <td><input type="number"  class="form-control" name="phone" placeholder="Nhập Số Điện Thoại" value="<?= $item['phone'];?>"></td>
    </tr>
    <tr>
        <td>Số Điện Thoại</td> <br>
        <td><input type="file"  class="form-control" name="image" placeholder="Nhập Ảnh" value="<?= $item['image'];?>"></td>
    </tr>
    <tr>
    <td><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
    </table>
    </form>
</body>
</html>