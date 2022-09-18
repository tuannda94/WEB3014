<form action="" method="post" enctype="multipart/form-data">
    <label for="">Tên tour</label>
    <input type="text" name="name" id="">
    <br>
    <label for="">Ảnh tour</label>
    <input type="file" name="image" id="">
    <br>
    <label for="">intro tour</label>
    <input type="text" name="intro" id="">
    <br>
    <label for="">description tour</label>
    <input type="text" name="description" id="">
    <br>
    <label for="">number_date tour</label>
    <input type="number" name="number_date" id="">
    <br>
    <label for="">price tour</label>
    <input type="number" name="price" id="">
    <br>
    <label for="">category_id tour</label>
    <select name="category_id" id="">
        <?php foreach ($cata as $key => $ct) : ?>
            <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
        <?php endforeach ?>
    </select>
    <br>
    <input type="submit" name="add" value="Thêm">
</form>