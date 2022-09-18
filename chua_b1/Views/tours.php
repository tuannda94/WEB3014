<?php
// Đã có biến $tours từ controller trước khi include view này
?>
<table border="1">
    <thead>
        <td>Name</td>
        <td>Image</td>
        <td>Intro</td>
        <td>Description</td>
        <td>Number Date</td>
        <td>Price</td>
        <td>Category</td>
        <td>
            <a href="?url=create-tour">Add</a>
        </td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour): ?>
            <tr>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['image'] ?></td>
                <td><?= $tour['intro'] ?></td>
                <td><?= $tour['description'] ?></td>
                <td><?= $tour['number_date'] ?></td>
                <td><?= $tour['price'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Remove</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
