<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $loadtour['id'] ?>">
    <label for="">Tên tour</label>
    <input type="text" name="name" value="<?= $loadtour['name'] ?>">
    <br>
    <label for="">Ảnh tour</label>
    <input type="file" name="image" value="<?= $loadtour['image'] ?>">

    <br>
    <label for="">intro tour</label>
    <input type="text" name="intro" value="<?= $loadtour['intro'] ?>">
    <br>
    <label for="">description tour</label>
    <input type="text" name="description" value="<?= $loadtour['description'] ?>">
    <br>
    <label for="">number_date tour</label>
    <input type="number" name="number_date" value="<?= $loadtour['number_date'] ?>">
    <br>
    <label for="">price tour</label>
    <input type="number" name="price" value="<?= $loadtour['price'] ?>">
    <br>
    <label for="">category_id</label>
    <select name="category_id" id="">
        <?php foreach ($cata as $key => $ct) : ?>
            <?php if ($ct['id'] == $loadtour['id']) : ?>
                <option selected value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
            <?php else : ?>
                <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
            <?php endif ?>
        <?php endforeach ?>
    </select>
    <br>
    <input type="submit" name="add" value="Sửa">
</form>