<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?url=update-tour&id=<?= $tour['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="name">
            <label for="">Thêm tên</label>
            <input type="text" name="name" placeholder="tên" value="<?= $tour['name'] ?>">
        </div>
        <div class="image">
            <label for="">Thêm image</label>
            <input type="file" name="image">
        </div>
        <div class="intro">
            <label for="">Thêm intro</label>
            <input type="text" name="intro" placeholder="intro" value="<?= $tour['intro'] ?>">
        </div>
        <div class="description">
            <label for="">Thêm mô tả</label>
            <textarea name="description" id="" cols="30" rows="10"><?= $tour['description'] ?></textarea>
        </div>
        <div class="numberdate">
            <label for="">Thêm number date</label>
            <input type="number" name="number_date" placeholder="numberdate" value="<?= $tour['number_date'] ?>">
        </div>
        <div class="price">
            <label for="">Thêm giá</label>
            <input type="number" name="price" placeholder="price" value="<?= $tour['price'] ?>">
        </div>
        <div class="select">
            <select name="category" id="">
                <?php foreach ($categories as $category) : ?>
                    <?php if ($category['id'] == $tour['category_id']) : ?>
                        <option selected value="<?= $category['id'] ?>">
                            <?= $category['name'] ?>
                        </option>
                    <?php else : ?>
                        <option value="<?= $category['id'] ?>">
                            <?= $category['name'] ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="edit" name="send">

    </form>
</body>

</html>