<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       <p><?= isset($message)?$message:"" ?></p>
       <form action="index.php?url=update-tour" method="post">
           <input type="hidden" name="idTour" value="<?= $tour['id'] ?>">
           <label for="">Tên Tour</label>
           <input type="text" name="nameTour" value="<?= $tour['name'] ?>" >
           <p><?= isset($err_name)?$err_name:"" ?></p>
           <br>
           <label for="">Loại Tour</label>
           <Select name="cateId">
               
               <?php foreach($Categories as $key => $Category): ?>
                <?php if($Category['id'] == $tour['id']): ?>
               <option selected value="<?= $Category['id'] ?>"><?= $Category['name'] ?></option>
               <?php else : ?>
                <option value="<?= $Category['id'] ?>"><?= $Category['name'] ?></option>
                <?php endif ?>
               <?php endforeach  ?>
           </Select>
           <p><?= isset($err_cate_id)?$err_cate_id:"" ?></p>
           <br>
           <input type="submit" name="updateTour" value="update">
       </form>
</body>
</html>