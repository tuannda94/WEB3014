<?php
// Đã có biến $tours từ controller trước khi include view này
// echo '<pre>';
// var_dump($tours);
// echo '</pre>';
?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Intro</th>
            <th>Description</th>
            <th>Number date</th>
            <th>Price</th>
            <th>Category</th>
            <th><a href="index.php?url=create-tour">Thêm</a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['image'] ?></td>
                <td><?= $tour['intro'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><?= $tour['number_date'] ?></td>
                <td><?= $tour['price'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td>
                    <a href="index.php?url=update-tour&id=<?= $tour['id'] ?>">Sửa</a>
                    <a onclick="return confirm ('Xác nhận xoá')" href="index.php?url=del-tour&id=<?= $tour['id'] ?>">Xoá</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
