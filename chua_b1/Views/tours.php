<?php
// Đã có biến $tours từ controller trước khi include view này
// echo '<pre>';
// var_dump($tours);
// echo '</pre>';
// 
?>
<h2>Danh sách tour</h2>
<h3><a href="index.php?url=create-tour">Thêm tour</a></h3>
<table>
    <tr>
        <th>stt</th>
        <th>name</th>
        <th>image</th>
        <th>tour_category</th>
        <th>intro</th>
        <th>description</th>
        <th>number_date</th>
        <th>price</th>
        <th colspan="2">Thao tác</th>
    </tr>

    <?php
    if (isset($tours)) {
        foreach ($tours as $key => $value) {
            extract($value);
            $act_sua = 'index.php?url=update-tour&id=' . $id;
            $act_xoa = 'index.php?url=delete-tour&id=' . $id;
            echo '
                    <tr>
                    <td>' . $key + 1 . '</td>
                    <td>' . $name . '</td>
                    <td><img src="' . $image . '" alt="hình ảnh" width="100px"></td>
                    <td>' . $name_cate . '</td>
                    <td>' . $intro . '</td>
                    <td>' . $description . '</td>
                    <td>' . $number_date . ' Ngày</td>
                    <td>' . number_format($price) . ' Vnđ</td>
                    <td><a href="' . $act_sua . '">Sửa</a></td>
                    <td><a href="' . $act_xoa . '">Xóa</a></td>
                    </tr>';
        }
    }
    ?>
</table>