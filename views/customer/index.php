<a href="index.php?controller=customer&action=create" class="btn btn-info"> Thêm mới </a>
<table class="table">
<thead>
    <tr>
        <th>Mã Khách Hàng</th>
        <th>Tên Khách Hàng</th>
        <th>Địa Chỉ</th>
        <th>Giới tính</th>
        <th>Số Điện Thoại</th>
        <th>Ảnh</th>
        <th>Công Cụ</th>
    </tr>
</thead>
<tbody>
    <?php foreach( $items as $key => $row ): 
        // echo '<pre>';
        // print_r($row);
        // die();
        ?>
        <tr>
            
            <td><?php echo  ++$key;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php
                                    if ($row['sex'] == 0) {
                                        echo 'Nữ';
                                    } else {
                                        echo 'Nam';
                                    }
                                    ?></td>
            <td><?php echo $row['phone'];?></td>
            <td><img width="100px" src="http://localhost/module3/MVC-Casestudy/public/uploads/<?php echo $row['image'];?>"></td>
            <td>
            <a class="btn btn-warning"onclick="return confirm('Bạn muốn chỉnh sửa mục này!')"href="index.php?controller=customer&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
            <a class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"href="index.php?controller=customer&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>