<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController {
    public function index()
    {
        // Tìm kiếm user theo method GET và biến là keyword
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

        if (empty($keyword)) {
            $users = User::get();
        } else {
            $users = User::where('name', 'like', "%$keyword%")->get();
        }

        // Lấy thêm số lượng phần tử


        return $this->render('user.index', compact('users', 'keyword'));
    }

    public function store()
    {
        // validate kiểm tra các giá trị gửi lên có không, nếu không có thì phải quay lại đường dẫn form tạo mới
        $user = new User();
        $user->name = $_POST['name'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT); // ở hàm login, cần sử dụng password_verify để tiến hành kiểm tra password
        $user->email = $_POST['email'];
        $user->status = (int) $_POST['status'];

        // Định nghĩa tên file sẽ lưu vào DB
        $fileName = ''; // giá trị mặc định
        $avatarFile = $_FILES['avatar']; // lấy file từ form đã submit
        if ($avatarFile['size'] > 0) { // nếu file có kích thước > 0 ~ có tồn tại
            $path = '/public/images/avatars/'; // định nghĩa đường dẫn lưu file
            $fileName = $path . uniqid() . '_' . $avatarFile['name']; // giá trị đường dẫn đến file để lưu vào DB
            move_uploaded_file($avatarFile['tmp_name'], $fileName); // lưu file (nội dung ở thuộc tính tmp_name) vào đường dẫn $fileName
        }
        $user->avatar = $fileName; // gán đường dẫn vào thuộc tính avatar
        // Lưu
        $user->save();
        // Quay về
    }
}
