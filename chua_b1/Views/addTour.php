<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thêm tour</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nhập tên</label><br>
        <span><?=isset($errors['name'])? $errors['name']:''?></span><br>
        <input type="text" name="name" id=""><br>
        <label for="">Nhập intro</label><br>
        <input type="text" name="intro" id=""><br>
        <label for="">Nhập mô tả chi tiết</label><br>
        <textarea name="des" id="" cols="30" rows="10"></textarea><br>
        <label for="">Nhập giá</label><br>
        <input type="number" name="price" id=""><br>
        <span><?=isset($errors['price'])? $errors['price']:''?></span><br>
        <label for="">Nhập số  ngày</label><br>
        <input type="number" name="number_date" id=""><br>
        <span><?=isset($errors['date'])? $errors['date']:''?></span><br>
        <label for="">Chọn loại tour</label>
        <select name="cate" id="">
            <?php foreach($cates as $cate):?>
                <option value="<?=$cate['id_cate']?>" <?=(isset($cate) && $cate == $cate['id_cate'])? "selected" :''?>><?=$cate['name']?></option>
            <?php endforeach?>
        </select><br>
        <label for="">Tải ảnh lên</label><br>
        <input type="file" name="anh" id=""><br>
        <span><?=isset($errors['anh'])? $errors['anh']:''?></span><br>
        <button type="submit">Thêm</button>
        <a href="/Lab1_QuanPH18800/chua_b1/">Danh sách</a>
    </form>
</body>
</html>