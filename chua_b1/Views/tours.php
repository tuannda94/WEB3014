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
        <?php foreach ($tours as $tour): ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td>
                    <a href="?url=edit-tour&id=<?= $tour['id']?>">Edit</a>
                    <a href="?url=remove-tour&id=<?= $tour['id']?>" onclick="return confirm('Really?')">Remove</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
