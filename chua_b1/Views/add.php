<?php
$sql = "SELECT * FROM `categories`";
$arrTemp = getData($sql, FETCH_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
     $img = $_FILES['img'];

     $intro = $_POST['intro'];
     $des = $_POST['des'];
     $day = $_POST['day'];
     $price = $_POST['price'];
     $cate = $_POST['cate'];

     if (empty($name)) {
          $er['name'] = 'emtpy name';
     } else {
          $er['name'] = '';
     }

     if (empty($day)) {
          $er['day'] = 'empty day';
     } else if ($day < 1) {
          $er['day'] = 'day must >= 1';
     } else {
          $er['day'] = '';
     }

     if (empty($price)) {
          $er['price'] = 'empty price';
     } else if ($price < 1) {
          $er['price'] = 'price must >= 1';
     } else {
          $er['price'] = '';
     }

     if (empty($img['name'])) {
          $er['img'] = 'empty img';
     } else if ($img['size'] > 2000000) {
          $er['img'] = 'img size must <= 2MB';
     } else {
          $er['img'] = '';
     }
     if (empty($er['img'])) {
          $img_tail = array('jpg', 'png');
          $upload_ext = pathinfo($img['name'], PATHINFO_EXTENSION);
          if (!in_array($upload_ext, $img_tail)) {
               $er['img'] = "JPG, PNG files only!";
          } else {
               $img_name = $img['name'];
          }
     }

     if (!array_filter($er)) {
          $sql = "INSERT INTO `tours`(
               `name`,
               `image`,
               `intro`,
               `description`,
               `number_date`,
               `price`,
               `category_id`
           )
           VALUES(
               '$name',
               '$img_name',
               '$intro',
               '$des',
               '$day',
               '$price',
               '$cate'
           )";
          getData($sql);
          move_uploaded_file($img['tmp_name'], './img/' . $img['name']);
          setcookie('notifi', 'insert success!!!', time() + 3600, '/');
          header('location: /');
     }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <h2>Insert new tour</h2>
     <p style="color: red;">
          <?php if (isset($er)) : ?>
               <?php
               foreach ($er as $e) {
                    echo $e . "<br>";
               }
               ?>
          <?php endif; ?>
     </p>
     <form method="POST" enctype="multipart/form-data">
          <label for="">Name
               <input type="text" name="name" placeholder="enter name" value="<?= isset($name) ? $name : '' ?>">
          </label>
          <br>
          <br>
          <label for="">img
               <input type="file" name="img">
          </label>
          <br>
          <br>
          <label for="">intro
               <input type="text" name="intro" placeholder="" value="<?= isset($intro) ? $intro : '' ?>">
          </label>
          <br>
          <br>
          <label for="">des
               <textarea name="des" cols="30" rows="10"><?= isset($des) ? $des : '' ?></textarea>
          </label>
          <br>
          <br>
          <label for="">total day
               <input type="number" name="day" placeholder="number day of tour" value="<?= isset($day) ? $day : '' ?>">
          </label>
          <br>
          <br>
          <label for="">price
               <input type="number" name="price" placeholder="price" value="<?= isset($price) ? $price : '' ?>">
          </label>
          <br>
          <br>
          <label for="">category</label>
          <select name="cate" id="">
               <?php foreach ($arrTemp as $k) : ?>
                    <option value="<?= $k['id'] ?>" <?= isset($cate) && $cate == $k['id'] ? 'selected' : '' ?>>
                         <?= $k['name'] ?>
                    </option>
               <?php endforeach; ?>
          </select>
          <br>
          <br>
          <input type="submit" value="insert">
     </form>
     <br>
     <a href="/">back</a>
</body>

</html>