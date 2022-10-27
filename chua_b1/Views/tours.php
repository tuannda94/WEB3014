<table>
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
        <td><a href="?url=create-tour">Thêm</a></td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour) : ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><img src="uploads/<?= $tour['image'] ?>" alt="" width="100px" height="150px"></td>
                <td><?= $tour['intro'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><?= $tour['number_date'] ?></td>
                <td><?= $tour['price'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td>
                    <a href="?url=edit-tour&id=<?= $tour['id'] ?>">cập nhật</a>
                    <a href="?url=delete-tour&id=<?= $tour['id'] ?>">xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
