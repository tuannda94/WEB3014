
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th colspan="2"><a href="index.php?url=create-tour">Add tour</a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td><a href="index.php?url=edit-tour&id=<?= $tour['id'] ?>">Edit</a></td>
                <td><a href="index.php?url=delete-tour&id=<?= $tour['id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
