<?php
// Đã có biến $tours từ controller trước khi include view này
echo '<pre>';
var_dump($tours);
echo '</pre>';
?>
<table>
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><a href="add">Thêm</a></td>
                <td><a href="change">Sửa</a></td>
                <td><a href="delete">Xóa</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
