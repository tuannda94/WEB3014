<?php
// Thông thường: làm việc với bảng tours
// 1. Code kết nối DB
// 2. Truy vấn, lấy dữ liệu
// 3. Gán kq vào biến $tours -> hiển thị kq
// => Khi DB có sự thay đổi thì sẽ ảnh hưởng trực tiếp đên $tour

// Chuyển sang lập trình hướng vào đối tượng là tour
// KQ sau sẽ rõ
// BĐ với việc định nghĩa đối tượng tour

// Cú pháp định nghĩa đối tượng:
class TenDoiTuong {
    // Thuộc tính var $ten_thuoc_tinh
    // Phương thức function ten_phuong_thuc() {}
}

class Tour {
    // Thuộc tính
    var $ten_tour; // tour tên là gì
    var $diem_bat_dau; // bắt đầu đi từ đâu
    var $diem_ket_thuc; // đi đến chỗ nào
    var $thoi_gian; // đi mấy ngày

    // Phương thức
    function layThongTinTour() { // trả về các thông tin mong muốn
        return $this->ten_tour . ' - ' . $this->thoi_gian . ' ngày';
    }

    function nghiNgoi($so_ngay_nghi) { // tăng thời gian diễn ra tour để còn nghỉ
        $this->thoi_gian += $so_ngay_nghi;

        // return $this->thoi_gian;
    }
}
// Dựa vào hình thái đối tượng Tour bên trên, định nghĩa ra đối tượng mới
$tourHNQN = new Tour;
// Gán giá trị cho các thuộc tính của đối tượng mới
$tourHNQN->ten_tour = "Tour Hà Nội - Quảng Ninh";
$tourHNQN->diem_bat_dau = "Hà Nội";
$tourHNQN->diem_ket_thuc = "Quảng Ninh";
$tourHNQN->thoi_gian = 5;
echo '<pre>';
var_dump($tourHNQN);
var_dump($tourHNQN->ten_tour);
var_dump($tourHNQN->layThongTinTour());
$tourHNQN->nghiNgoi(5);
// var_dump($tourHNQN->nghiNgoi(10));
var_dump($tourHNQN->thoi_gian);

// Ví dụ về đối tượng Sinh viên
class SinhVien {
    var $ten;
    var $tuoi;
    var $ma_sv;
    var $dia_chi;
    var $diem_tb;
    var $tong_so_mon_da_hoc;

    function layThongTin() {
        return 'SV: ' . $this->ten . ' - ' . $this->ma_sv;
    }

    function layDiemTB() {
        return "SV học $this->tong_so_mon_da_hoc, điểm tb: $this->diem_tb";
    }

    function quaMon($diem_qua_mon) { // tính lại điểm tb cho sv
        $tm = $this->tong_so_mon_da_hoc;
        $this->diem_tb = ($this->diem_tb * $tm + $diem_qua_mon) / ($tm + 1);
        $this->tong_so_mon_da_hoc ++;
    }
}
$hoang = new SinhVien;
$hoang->ten = 'Nguyen Van Hoang';
$hoang->tuoi = 20;
$hoang->ma_sv = 'PH12345';
$hoang->dia_chi = 'HN';
$hoang->diem_tb = 7.5;
$hoang->tong_so_mon_da_hoc = 5;
$hoang->quaMon(4.9);
var_dump($hoang->layThongTin(), $hoang->layDiemTB());

$son = new SinhVien;
$son->ten = 'Tu Thi Son';
$son->tuoi = 19;
$son->ma_sv = 'PH11111';
$son->dia_chi = 'HP';
$son->diem_tb = 9.5;
$son->tong_so_mon_da_hoc = 1;
$son->quaMon(3.0);
var_dump($son->layThongTin(), $son->layDiemTB());
