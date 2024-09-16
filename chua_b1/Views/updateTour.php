<h2>UPDATE TOUR</h2>
<form action="index.php?url=update-tour&id=<?= isset($infor_tour['id']) ? $infor_tour['id'] : "" ?>" method="post"
    enctype="multipart/form-data">
    <div class="">
        <input type="hidden" name="id_tour" value="<?= isset($infor_tour['id']) ? $infor_tour['id'] : "" ?>">
    </div>
    <div>Name:
        <input type="text" name="name" value="<?= isset($infor_tour['name']) ? $infor_tour['name'] : "" ?>">
    </div>
    <div>image:
        <input type="file" name="image">
        <?= isset($error['file_size']) ? $error['file_size'] : "" ?>
        <?= isset($error['file_type']) ? $error['file_type'] : "" ?>
    </div>
    <img src="<?= isset($infor_tour['image']) ? $infor_tour['image'] : "" ?>" alt="hình ảnh" width="100px">
    <div>intro:
        <input type="text" name="intro" value="<?= isset($infor_tour['intro']) ? $infor_tour['intro'] : "" ?>">
    </div>
    <div>description:
        <input type="text" name="description"
            value="<?= isset($infor_tour['description']) ? $infor_tour['description'] : "" ?>">
    </div>
    <div>number_date:
        <input type="number" name="number_date"
            value="<?= isset($infor_tour['number_date']) ? $infor_tour['number_date'] : "" ?>">
        <?= isset($error['number_date']) ? $error['number_date'] : "" ?>
    </div>
    <div>price:
        <input type="number" name="price" value="<?= isset($infor_tour['price']) ? $infor_tour['price'] : "" ?>">
        <?= isset($error['price']) ? $error['price'] : "" ?>
    </div>
    <div>category:
        <select name="category" id="">
            <?php
            if (isset($categories)) {
            ?>
            <?php
                foreach ($categories as $category) {
                    extract($category);
                ?>
            <option value="<?= $id ?>" <?= ($id == $infor_tour['id_cate']) ? "selected" : "" ?>><?= $name ?></option>
            <?php
                }
                ?>

            <?php
            }
            ?>

        </select>
    </div>
    <div class="">
        <input type="submit" value="UPDATE" name="update_tour">
    </div>

</form>
<div class="">
    <a href="index.php?action=list_tour">
        <button>LIST TOURS</button>
    </a>
</div>