<?php 
    
?>
<h2>EDIT TOUR</h2>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $tour['id'] ?>">
    <label for="">NAME</label>
    <br>
    <input type="text" name="name" value="<?= $tour['name'] ?>">
    <br>
    <br>
    <label for="">CATEGORY NAME</label>
    <br>
    <select name="category_id">
        <?php foreach ($cate as $key => $c) : ?>
            <?php if ($tour['category_id'] == $c['id']) { ?>
                <option value="<?= $c['id'] ?>" selected><?= $c['name'] ?></option>
            <?php }else { ?>
                <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
            <?php } ?>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <button type="submit">Update</button>
    <br>
    <br>
    <a href="./index.php?url=/">Tours</a>
</form>