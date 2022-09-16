<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input name="price" type="number" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Intro</label>
                    <input name="intro" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Number date</label>
                    <input name="number_date" type="number" class="form-control" >
                </div>
                <div class="mb-3">
                <label class="form-label">Category</label>
                    <select name="category" class="form-select" >
                    <?php
								foreach($listCategory as $item){
							?>
								<option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
							<?php
								}
							?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload file</label>
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>