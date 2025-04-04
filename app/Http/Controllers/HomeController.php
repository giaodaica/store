<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function search(){
        $array = [
            ['name' => "Áo thun nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-01.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun nam tay ngắn", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-02.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun tay dài", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-04.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo phông nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-05.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo polo nam", 'price' => '250000', 'image' => 'images/11.avif', 'category' => 'Áo nam'],
            ['name' => "Áo khoác nam", 'price' => '250000', 'image' => 'images/12.avif', 'category' => 'Áo nam'],
            ['name' => "Áo vest nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-09.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun nữ", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-07.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-05.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ tay ngắn", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-10.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ đẹp", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-04.jpg', 'category' => 'Áo nữ'],
            ['name' => "Balo", 'price' => '250000', 'image' => 'images/demo-fashion-store-banner-03.jpg', 'category' => 'Phụ kiện'],
        ];
        $key = $_POST['search'];
        // dd($key);
        $product = [];
        foreach($array as $value){
            if($key == $value['name']){
                $product[] = $value;
            }

        }
        if($product){

            return view('pages.product.search',compact('product'));
        }else{
            echo "k thấy";
        }
    }
    public function autocomplete(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ client
        $query = $request->input('query');

        // Mảng sản phẩm của bạn
        $array = [
            ['name' => "Áo thun nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-01.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun nam tay ngắn", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-02.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun tay dài", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-04.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo phông nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-05.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo polo nam", 'price' => '250000', 'image' => 'images/11.avif', 'category' => 'Áo nam'],
            ['name' => "Áo khoác nam", 'price' => '250000', 'image' => 'images/12.avif', 'category' => 'Áo nam'],
            ['name' => "Áo vest nam", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-09.jpg', 'category' => 'Áo nam'],
            ['name' => "Áo thun nữ", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-07.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-05.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ tay ngắn", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-10.jpg', 'category' => 'Áo nữ'],
            ['name' => "Áo thun nữ đẹp", 'price' => '250000', 'image' => 'images/demo-fashion-store-product-04.jpg', 'category' => 'Áo nữ'],
            ['name' => "Balo", 'price' => '250000', 'image' => 'images/demo-fashion-store-banner-03.jpg', 'category' => 'Phụ kiện'],
        ];

        // Tìm kiếm trong mảng các sản phẩm theo tên
        $results = [];
        foreach ($array as $item) {
            if (stripos($item['name'], $query) !== false) {
                $results[] = $item;
            }
        }

        // Trả về kết quả tìm kiếm dưới dạng JSON
        return response()->json($results);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function success(){
        return view('pages.auth.success');
    }

}
