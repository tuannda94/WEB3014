<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Intro</th>
            <th>Description</th>
            <th>Number_date</th>
            <th>Price</th>
            <th><a href="index.php?url=create-tour">Thêm mới</a></th>
        </tr>

    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour) : ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><img src="../img/<?= $tour['image'] ?>" alt="" width="90"></td>
                <td><?= $tour['intro'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><?= $tour['number_date'] ?></td>
                <td><?= $tour['price'] ?></td>
                <td><a href="index.php?url=edit-tour&&id=<?= $tour['id'] ?>">Sửa</a>
                    <a href="index.php?url=delete-tour&&id=<?= $tour['id'] ?>">Xoá</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
