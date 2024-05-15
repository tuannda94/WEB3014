<form action="" method="post" enctype="multipart/form-data">
    <label for="">Tên Tour</label>
    <input type="text" name="name" id="">
    <br>
    <label for="">Ảnh Tour</label>
    <input type="file" name="image" id="">
    <br>
    <label for="">Intro Tour</label>
    <input type="text" name="intro" id="">
    <br>
    <label for="">Description Tour</label>
    <input type="text" name="description" id="">
    <br>
    <label for="">Number_date Tour</label>
    <input type="number" name="number_date" id="">
    <br>
    <label for="">Price Tour</label>
    <input type="number" name="price" id="">
    <br>
    <label for="">Category Tour</label>
    <select name="category_id" id="">
        <?php foreach ($cate as $key => $cat) : ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" name="add" value="Thêm">
</form>