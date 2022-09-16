
<table>
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
        <td>image</td>
        <td>intro</td>
        <td>description</td>
        <td>number_date</td>
        <td>price</td>

    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour) : ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><img src="img/<?= $tour['image'] ?>" alt="" width="50"></td>
                <td><?= $tour['intro'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><?= $tour['number_date'] ?></td>
                <td><?= $tour['price'] ?></td>
                <td><a href="index.php?url=edit-tour&&id=<?= $tour['id'] ?>">Sửa</a> || <a href="index.php?url=delete-tour&&id=<?= $tour['id'] ?>">Xoá</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="index.php?url=create-tour">Thêm mới</a>