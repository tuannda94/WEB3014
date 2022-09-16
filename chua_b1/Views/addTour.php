<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <select name="category_id" id="">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Save" name="AddTour">
    </form>
    <?php
        if(isset($erros)){
            foreach($errors as $error){
                echo $error. "<br>";
            }
        }
        if(isset($message)){
            echo $message;
        }
    ?>
</body>
</html>