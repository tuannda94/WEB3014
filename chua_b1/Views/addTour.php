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
       <form action="index.php?url=create-tour" method="post">
           <label for="">Tên Tour</label>
           <input type="text" name="nameTour" >
           <p><?= isset($err_name)?$err_name:"" ?></p>
           <br>
           <label for="">Loại Tour</label>
           <Select name="cateId">
               <option value=""></option>
               <?php foreach($Categories as $key => $Category): ?>
               <option value="<?= $Category['id'] ?>"><?= $Category['name'] ?></option>
               <?php endforeach  ?>
           </Select>
           <p><?= isset($err_cate_id)?$err_cate_id:"" ?></p>
           <br>
           <input type="submit" name="createTour" value="Thêm tour">
       </form>
</body>
</html>