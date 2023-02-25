<form action="" method="post" enctype="multipart/form-data">
    <label for="">Name</label>
    <input type="text" name="name">
    <i ><?= isset($erros['name'])?$erros['name']:'' ?></i>
    <br>
    <label for="">Image</label>
    <input type="file" name="image">
    <i ><?= isset($erros['image'])?$erros['image']:'' ?></i>
    <br>
    <label for="">Intro</label>
    <input type="text" name="intro">
    <i ><?= isset($erros['name'])?$erros['name']:'' ?></i>
    <br>
    <label for="">Description</label>
    <input type="text" name="description">
    <i ><?= isset($erros['intro'])?$erros['intro']:'' ?></i>
    <br>
    <label for="">Number date</label>
    <input type="text" name="number_date">
    <i ><?= isset($erros['number_date'])?$erros['number_date']:'' ?></i>
    <br>
    <label for="">Price</label>
    <input type="text" name="price">
    <i ><?= isset($erros['price'])?$erros['price']:'' ?></i>
    <br>
    <select name="category_id" id="">
        <?php foreach ($tours as $tour):?>
            <option value="<?= $tour['id']?>"><?= $tour['name']?></option>
        <?php endforeach; ?>
    </select>
    <br>
     <button type="submit">Add</button>
</form>