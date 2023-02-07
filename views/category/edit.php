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
    <form action="index.php?controller=category&action=update&id=<?php echo  $item['id']?>" method="post">
    <table>
    <tr>
        <td>Tên Thể Loại:</td> 
        <td><input type="text" class="form-control" name="name" placeholder="Nhập Tên Sản Phẩm" value="<?= $item['name'];?>"></td>
    </tr>
    <tr>
        <td>Mô Tả Thể Loại :</td> 
        <td><input type="text" class="form-control" name="description" placeholder="Nhập Mô Tả Thể Loại" value="<?= $item['description'];?>"></td>
    </tr>
    <tr>
    <td><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
    </table>
    </form>
</body>
</html>