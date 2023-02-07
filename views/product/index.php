<a href="index.php?controller=product&action=create" class="btn btn-info"> Thêm mới </a>
<table class="table">
<thead>
    <tr>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Thể loại</th>
        <th>Giá Tiền</th>
        <th>Số Lượng</th>
        <th>Ảnh</th>
        <th>Trạng thái</th>
        <th>Công Cụ</th>

    </tr>
</thead>
<tbody>
    <?php foreach( $items as $item => $row): 
        // echo '<pre>';
        // print_r($row);
        // die();
        ?>
        <tr>
            <td> <?php echo ++$item ;?> </td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['name_category'];?></td>
            <td><?php echo number_format($row['price']);?> VNĐ</td>

            <td><?php echo $row['quantity'];?></td>
            <td><img width="100px" src="http://localhost/module3/MVC-Casestudy/public/uploads/<?php echo $row['image'];?>" alt=""></td>

            <td><?php if($row['status'] == 1){ echo 'Tắt';} else { echo 'Bật';};?></td>

            <td>
            <a class="btn btn-warning"onclick="return confirm('Bạn muốn chỉnh sửa mục này!')"href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> 
            <a class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>