<?php 
    
?>
<h2>Create Tour</h2>
<form action="" method="post">
    <label for="">NAME</label>
    <br>
    <input type="text" name="name">
    <br>
    <br>
    <label for="">CATEGORY NAME</label>
    <br>
    <select name="category_id">
        <?php foreach ($cate as $key => $c) : ?>
            <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <button type="submit">Creata</button>
    <br>
    <br>
    <a href="./index.php?url=/">Tours</a>
</form>