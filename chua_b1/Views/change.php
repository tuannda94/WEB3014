<form action="/" method="POST">
<select name="name" id="">
        <?php foreach ($tour as $value){?>
        <option value=""><?php $value['cate_name']?></option>
        <?php }?>
    </select>
    <input type="text" placeholder="Intro" name="intro">
    <input type="text" placeholder="Description" name="description">
    <input type="text" placeholder="Price" name="price">
    <input type="submit" placeholder="sửa">
</form>