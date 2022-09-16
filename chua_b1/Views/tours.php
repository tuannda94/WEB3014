<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary"><a class="btn-add" href="index.php?url=create-tour">Add</a></button>

            </div>
        </div>
    </div>
    <div class="container">
        <?php
        foreach ($tours as $item) {
        ?>
            <div class="card">
                <?php
                echo '<img src="./uploads/' . $item['img'] . '" alt="Screen shot" height="200" width="200" />'
                ?>
                <div class="card-content">
                    <label><?php
                            echo $item['name'];
                            ?></label>
                    <p><?php
                        echo $item['price'];
                        ?></p>
                    <p>Category: <?php
                                    echo $item['cate_name'];
                                    ?></p>
                    <p>Description: <?php
                                    echo $item['description'];
                                    ?></p>
                    <p>Number date: <?php
                                    echo $item['number_date'];
                                    ?></p>
                    <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-info">
                        <i class='bx bx-cart-alt'></i>
                        Update
                    </a>

                    <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">
                        <i class='bx bx-cart-alt'></i>
                        Delete
                    </a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</body>

</html>