<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with([
            'variants.attributes', // Lấy attributes của từng variant
            'images',
            "variantAttributes"
                           // Lấy hình ảnh của sản phẩm
        ])->get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|numeric',
            'description' => 'nullable|string',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Tạo sản phẩm
        $product = Product::create([
            'name' => $validated['name'],
            'base_price' => $validated['base_price'],
            'description' => $validated['description'] ?? null,
        ]);
    
        // Lưu hình ảnh
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public'); // Lưu ảnh vào thư mục storage/app/public/products
            $product->images()->create(['image_url' => $path]); // Lưu đường dẫn ảnh vào cơ sở dữ liệu
        }
    
        // Xử lý biến thể (nếu có)
        if ($request->variants) {
            $variants = explode("\n", $request->variants); // Tách biến thể theo dòng
            foreach ($variants as $variant) {
                $variantData = explode(',', $variant); // Tách thuộc tính theo dấu phẩy
                $product->variants()->create([
                    'sku' => trim($variantData[0] ?? 'SKU-' . uniqid()),
                    'price' => trim($variantData[1] ?? $product->base_price),
                    'stock' => trim($variantData[2] ?? 0),
                ]);
            }
        }
    
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with(['variants', 'images', 'variantAttributes'])->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with(['variants', 'images'])->findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|numeric',
            'description' => 'nullable|string',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = Product::findOrFail($id);
    
        // Cập nhật thông tin sản phẩm
        $product->update([
            'name' => $validated['name'],
            'base_price' => $validated['base_price'],
            'description' => $validated['description'] ?? null,
        ]);
    
        // Cập nhật hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ
            foreach ($product->images as $image) {
                if ($image->image_url) {
                    Storage::disk('public')->delete($image->image_url); // Xóa file khỏi storage
                }
                $image->delete(); // Xóa bản ghi trong database
            }
        
            // Lưu hình ảnh mới
            $path = $request->file('image')->store('products', 'public');
            $product->images()->create(['image_url' => $path]);
        }
    
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            // Tìm sản phẩm theo ID
            $product = Product::findOrFail($id);
    
            // Xóa hình ảnh liên quan
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_url);
                $image->delete();
            }
    
            // Xóa các biến thể liên quan
            $product->variants()->delete();
    
            // Xóa sản phẩm
            $product->delete();
    
            return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công!');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('error', 'Đã xảy ra lỗi khi xóa sản phẩm: ' . $e->getMessage());
        }
    }
}
