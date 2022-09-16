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
        <td>Action</td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><a href="index.php?url=edit-tour&&id=<?= $tour['id'] ?>">sửa</a></td>
                <td><a href="index.php?url=destroy-tour&&id=<?= $tour['id'] ?>">xóa</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
