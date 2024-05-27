<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <td>ID</td>
            <td>NAME</td>
            <td>Tour Type</td>
            <td>Number Date</td>
            <td><a href="?url=addTour">thêm</a></td>
        </thead>
        <tbody>
            <?php foreach ($tours as $tour):?>
                <tr>
                    <td><?= $tour['id']?></td>
                    <td><?= $tour['name_t']?></td>
                    <td><?= $tour['name']?></td>
                    <td><?= $tour['number_date']?></td>
                    <td>
                    <a href="?url=update&id=<?= $tour['id']?>">sửa</a>
                    <a href="?url=delete&id=<?= $tour['id']?> " onclick="return confirm('bạn chắc chắn chưa')">xóa</a>
                </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>