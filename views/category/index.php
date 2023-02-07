<a href="index.php?controller=category&action=create" class="btn btn-info"> Thêm mới </a>
<table class="table">
<thead>
    <tr>
        <th>Mã Thể Loại</th>
        <th>Tên Thể Loại</th>
        <th>Mô Tả</th>
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
            <td><?php echo $row['description'];?></td>
            <td>
            <a class="btn btn-warning"onclick="return confirm('Bạn muốn chỉnh sửa mục này!')"href="index.php?controller=category&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
            <a class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"href="index.php?controller=category&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>