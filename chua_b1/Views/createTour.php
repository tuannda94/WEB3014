<form action="index.php?url=create-tour" method="post" enctype="multipart/form-data">
    <div>Name:
        <input type="text" name="name">
    </div>
    <div>image:
        <input type="file" name="image">
        <?= isset($error['file_size']) ? $error['file_size'] : "" ?>
        <?= isset($error['file_type']) ? $error['file_type'] : "" ?>
    </div>
    <div>intro:
        <input type="text" name="intro">
    </div>
    <div>description:
        <input type="text" name="description">
    </div>
    <div>number_date:
        <input type="number" name="number_date">
        <?= isset($error['number_date']) ? $error['number_date'] : "" ?>
    </div>
    <div>price:
        <input type="number" name="price">
        <?= isset($error['price']) ? $error['price'] : "" ?>
    </div>
    <div>category:
        <select name="category" id="">
            <?php
            if (isset($categories)) {
                foreach ($categories as $category) {
                    extract($category);
                    echo '<option value="' . $id . '">' . $name . '</option></option>';
                }
            }
            ?>
        </select>
    </div>
    <div class="">
        <button name="add_tour">ADD</button>
    </div>

</form>
<div class="">
    <a href="index.php?url=/">
        <button>LIST TOURS</button>
    </a>
</div>