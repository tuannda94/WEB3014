<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ],
            'products' => Product::all() // lấy ra tất cả các bản ghi dưới dạng 1 collection
        ];

        // var_dump($data);
        // // return $data;
        // die;

        return $this->render($viewName, $data);
    }

    // GET: Hàm hiển thị danh sách
    public function index()
    {
        // Controller sẽ tương tác với Model, Model sẽ tương tác với DB để lấy dữ liệu trả cho Controller
        // $products = Product::all(); // lấy ra tất cả các bản ghi

        // $products = Product::paginate(1); // lấy ra 10 bản ghi trên 1 trang
        $products = Product::select('id', 'name', 'price')->where('id', '>', 0)->get(); // lấy ra các bản ghi theo điều kiện
        $count = Product::count(); // đếm số bản ghi trong DB
        // Controller có dữ liệu rồi thì đưa dữ liệu đó cho view để hiển thị ra
        // compact sẽ gói các biến lại thành 1 mảng gồm key là tên biến và value là giá trị của biến đó
        return $this->render('product.index', compact('products', 'count'));
    }

    // GET: Hàm hiển thị giao diện tạo mới bản ghi
    public function create()
    {
        return $this->render('product.create', []);
    }

    // POST: Hàm lưu dữ liệu người dùng nhập tạo mới
    public function store()
    {
        // KHÔNG LƯU ĐƯỢC KHI CHƯA ĐẶT TIMESTAMPS Ở MODEL VỀ FALSE
        $product = new Product();
        // Thuộc tính của đối tượng vừa khởi tạo phải đúng là tên trường trong bảng products
        $product->name = $_POST['name'];
        $product->price = (int) $_POST['price'];
        $product->status = (int) $_POST['status'];
        // Lưu
        // var_dump($product);
        $product->save();
        // Product::create([
        //     'name' => $_POST['name'],
        //     'price' => (int) $_POST['price'],
        //     'status' => (int) $_POST['status'],
        // ]);

        $url = BASE_URL . 'products';
        header("location: $url");
    }

    // GET: Hàm xoá bản ghi theo id truyền vào
    public function destroy($id)
    {
        // Cách 1: Tìm kiếm Product có id = $id và sau đó xoá Product đó đi bằng phương thức delete()
        $product = Product::find($id); // tìm theo id và trả về 1 đối tương ~ fetch
        // $productWhereFirst = Product::where('id', $id)->first(); // ~ fetch
        // $productWhere = Product::where('id', $id)->get(); // ~ fetchAll

        if ($product && $product->delete()) {
            $url = BASE_URL . 'products';
            header("location: $url");
        }

        // Cách 2: Không đi tìm nữa, Bảo Product xoá thằng có id = 1
        // Product::destroy($id);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return $this->render('product.edit', compact('product'));
    }

    public function update($id)
    {
        // Việc cập nhật giá trị 1 bản ghi ~ cập nhật giá trị các thuộc tính của 1 đối tượng sau đó gọi hàm save()
        $product = Product::find($id);
        $product->name = $_POST['name'];
        $product->price = (int) $_POST['price'];
        $product->status = (int) $_POST['status'];

        $product->save();

        $url = BASE_URL . 'products';
        header("location: $url");
    }
}
