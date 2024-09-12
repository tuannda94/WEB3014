<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?url=store-tour" method="post" enctype="multipart/form-data">
        <div class="name">
            <label for="">Thêm tên</label>
            <input type="text" name="name" placeholder="tên">
        </div>
        <div class="image">
            <label for="">Thêm image</label>
            <input type="file" name="image">
        </div>
        <div class="intro">
            <label for="">Thêm intro</label>
            <input type="text" name="intro" placeholder="intro">
        </div>
        <div class="description">
            <label for="">Thêm mô tả</label>
            <input type="text" name="description" placeholder="description   ">
        </div>
        <div class="numberdate">
            <label for="">Thêm number date</label>
            <input type="number" name="number_date" placeholder="numberdate">
        </div>
        <div class="price">
            <label for="">Thêm giá</label>
            <input type="number" name="price" placeholder="price">
        </div>
        <div class="select">
            <select name="category" id="">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach ?>
                <option value=""></option>
            </select>
        </div>
        <input type="submit" value="create" name="send">

    </form>
</body>

</html>