<?php
// Đã có biến $tours từ controller trước khi include view này

?>
<p style="color:blue;"><?=(isset($_GET['message']))? $_GET['message']:''?></p>
<table border="1">
    <thead style="background-color: green;">
        <td>ID</td>
        <td>Name</td>
        <td>Mô tả</td>
        <td>Ảnh</td>
        <td>Category</td>
        <td colspan="2">Select</td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id_tours'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><img src="images/<?= $tour['image'] ?>" alt="" width="100px" height="150px"></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><a href="/Lab1_QuanPH18800/chua_b1?url=edit-tour&id=<?=$tour['id_tours']?>">Edit</a></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="/Lab1_QuanPH18800/chua_b1?url=delete-tour&id=<?=$tour['id_tours']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="/Lab1_QuanPH18800/chua_b1?url=create-tour">Thêm mới tour</a>
