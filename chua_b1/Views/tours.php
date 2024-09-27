<?php
// Đã có biến $tours từ controller trước khi include view này
echo '<pre>';
// var_dump($tours);
echo '</pre>';
$err = '';
if (isset($_COOKIE['notifi'])) {
    $notifi_content = $_COOKIE['notifi'];
    $notifi = "<script>alert('$notifi_content')</script>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['idTour']) && $_POST['idTour'] > 0) {
        $idTour = $_POST['idTour'];
    } else if ($_POST['idTour'] <= 0) {
        $err .= ' pls enter id tour valid ';
    }

    $checkId = 0;
    foreach ($tours as $key => $value) {
        if ($value['id'] == $_POST['idTour']) {
            $checkId = 1;
        }
    }
    $checkId != 1 ? $err .= ' id tour not avaliabe ' : '';

    if (isset($_POST['editTour'])) {
        $optionEdit = $_POST['editTour'];
    } else {
        $err .= ' pls choose option want to edit tour ';
    }

    if (isset($idTour) && isset($optionEdit) && empty($err)) {
        $_SESSION['idEdit'] = $idTour;
        switch ($optionEdit) {
            case 'edit':
                header('location: /edit');
                break;
            case 'delete':
                header('location: /delete');
                break;
            default:
                break;
        }
    }
}
?>
<br>
<?php if (isset($notifi)) : ?>
    <?= $notifi ?>
    <?php setcookie('notifi', '', 1); ?>
<?php endif; ?>

<a href="/add">Add a new tour</a>
<table>
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
    </thead>
    <tbody>
        <?php foreach ($tours as $key => $tour) : ?>
            <tr>
                <td><?= $tour['id'] ?></td>
                <td><?= $tour['name'] ?></td>
                <td><?= $tour['cate_name'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br><br><br>

<h3 style="color:red"><?= isset($err) ? $err : '' ?></h3>
<form method="post">
    <b>Enter ID of tour want to edit</b>
    <br>
    <input type="number" name="idTour">
    <br>
    <br>
    <input type="radio" name="editTour" id="edit" value="edit">
    <label for="edit">
        Edit tour
    </label>
    <input type="radio" name="editTour" id="delete" value="delete">
    <label for="delete">
        Delete tour
    </label>
    <br>
    <br>
    <button type="submit" onclick="return confirm('really want to do this action?')">Run</button>
</form>