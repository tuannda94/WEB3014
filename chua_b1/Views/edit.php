<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $storeTour['id'] ?>">
    <label for="">Tên Tour</label>
    <input type="text" name="name" value="<?= $storeTour['name'] ?>">
    <br>
    <label for="">Ảnh Tour</label>
    <input type="file" name="image" value="<?= $storeTour['image'] ?>">

    <br>
    <label for="">Intro Tour</label>
    <input type="text" name="intro" value="<?= $storeTour['intro'] ?>">
    <br>
    <label for="">Description Tour</label>
    <input type="text" name="description" value="<?= $storeTour['description'] ?>">
    <br>
    <label for="">Number_date Tour</label>
    <input type="number" name="number_date" value="<?= $storeTour['number_date'] ?>">
    <br>
    <label for="">Price Tour</label>
    <input type="number" name="price" value="<?= $storeTour['price'] ?>">
    <br>
    <label for="">Category</label>
    <select name="category_id" id="">
        <?php foreach ($cata as $key => $ct) : ?>
            <?php if ($ct['id'] == $storeTour['id']) : ?>
                <option selected value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
            <?php else : ?>
                <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
            <?php endif ?>
        <?php endforeach ?>
    </select>
    <br>
    <input type="submit" name="add" value="Sửa">
</form>