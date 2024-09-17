
 <h1>Thêm</h1>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Tên tour</label><input type="text" name="ten" value="<?= $tour['name'] ?>">
    <label for="">Ảnh</label><input type="file" name="image" value="<?= $tour['image'] ?>">
    <label for="">Intro</label><input type="text" name="intro" value="<?= $tour['intro'] ?>">
    <label for="">Description</label><input type="text" name="des" value="<?= $tour['description'] ?>">
    <label for="">Number date</label><input type="number" name="nd" value="<?= $tour['number_date'] ?>">
    <label for="">Price</label><input type="number" name="price" value="<?= $tour['price'] ?>">
    <label for="">Category id</label>
    <select name="cate_id" >
        <?php foreach ($cate_id as $ca_id) { ?>
            <option <?= $ca_id['id']==$tour['cate_id'] ? 'selected' : '' ?> value="<?= $ca_id['id'] ?>"><?= $ca_id['name'] ?></option>
        <?php } ?>
    </select>
    <button class="btn btn-primary" type="submit">Sửa</button>
</form>

