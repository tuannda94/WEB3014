<?php
// Tính đóng gói: giới hạn khả năng truy cập
// (lấy, gán giá trị cho các thuộc tính hoặc gọi phương thức) của chính nó hoặc của cha

// tầm vực của thuộc tính/phương thức, thay thế cho var
// public: cha và con đều có thể tương tác được
// protected: cha và con -> nhưng là trong 2 class đang định nghĩa, chứ không phải là khi đã khởi tạo
// private: chỉ có cha được thao tác (chỉ chính class đó)
class Cha {
    // Thuộc tính bị giới hạn ở riêng trong class này
    private $tien = 10000000;
    protected $taisan = 5000000;

    // Phương thức này có thể được gọi ở ngoài class này
    // Phương thức này thường dùng để lôi thông tin từ các thuộc tính private ra
    // private function xemTien() { // Fatal error: Uncaught Error: Call to private method
    //     return "chi duoc xem: $this->tien";
    // }
    public function xemTien() {
        return "chi duoc xem: $this->tien";
    }
}

class Con extends Cha {
    public function xemTaiSanProtected() {
        // Chỉ khi thao tác bên trong quá trình định nghĩa class Con
        // thì mới tương tác được với thuộc tính dạng protected của Cha
        return "xem tai san protected: $this->taisan";
    }

    public function themTaiSanProtected($so_tien) {
        $this->taisan += $so_tien;
    }

    public function xemTienPrivate() {
        // Dù thao tác trong quá trình định nghĩa class Con
        // nhưng thuộc tính dạng private ở Cha cũng không đọc được
        return "xem tien private: $this->tien";
    }
}

$nghiem = new Con();
// Với việc định nghĩa đối tượng Cha có thuộc tính private $tien
// $tien sẽ chỉ tồn tại ở trong đối tượng Cha, mà Con sẽ không thấy
// var_dump($nghiem->tien); // Undefined property
echo '<pre>';
var_dump($nghiem->xemTien());
// var_dump($nghiem->taisan); // Fatal error: Uncaught Error: Cannot access protected property
$nghiem->themTaiSanProtected(2000000);
var_dump($nghiem->xemTaiSanProtected());
var_dump($nghiem->xemTienPrivate());
