<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <pre>
        <input type="text" name="name" placeholder="nhập tên tour">
        <i><?= isset($err['name'])?$err['name']:''?></i>
        <input type="text" name="des" placeholder="MOTA">
        <input type="text" name="intro" placeholder="intro">
        <!-- <input type="file" name="anh"> -->
        <input type="date" name="number_date" placeholder="số ngày">
        <input type="number" name="price" placeholder="Giá tiền">
        
        <button  type="submit" class="btn">thêm</button>
    </pre>
    </form>
</body>
</html>