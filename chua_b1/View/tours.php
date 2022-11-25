<?php
    //Đã có biến $tours từ controller trước khi include view
?>
<h2><a href="./index.php?url=create-tour">Create Tour</a></h2>
<table border="1px solid black">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Category</td>
            <td>Edit</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $ts) : ?>
            <tr>
                <td><?= $ts['id'] ?></td>
                <td><?= $ts['name'] ?></td>
                <td><?= $ts['cate_name'] ?></td>
                <td>
                    <a href="./index.php?url=edit-tour&id=<?= $ts['id'] ?>">Update</a>
                    /
                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="./index.php?url=destroy-tour&id=<?= $ts['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>