<form action="" method="post" enctype="multipart/form-data">
    <label for="">Name</label>
    <input type="text" name="name" value="<?= $Tour_id['name'] ?>">
    <i ><?= isset($erros['name'])?$erros['name']:'' ?></i>
    <br>
    <!-- image -->
    <br>
    <label for="">Intro</label>
    <input type="text" name="intro" value="<?= $Tour_id['intro'] ?>">
    <i ><?= isset($erros['intro'])?$erros['intro']:'' ?></i>
    <br>
    <label for="">Description</label>
    <input type="text" name="description" value="<?= $Tour_id['description'] ?>">
    <i ><?= isset($erros['description'])?$erros['description']:'' ?></i>
    <br>
    <label for="">Number date</label>
    <input type="text" name="number_date" value="<?= $Tour_id['number_date'] ?>">
    <i ><?= isset($erros['number_date'])?$erros['number_date']:'' ?></i>
    <br>
    <label for="">Price</label>
    <input type="text" name="price" value="<?= $Tour_id['name'] ?>">
    <i ><?= isset($erros['price'])?$erros['price']:'' ?></i>
    <br>
    <!-- select -->
    <br>
     <button type="submit">Add</button>
</form>