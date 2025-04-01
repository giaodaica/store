<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use App\Models\Variant;
use App\Models\VariantAttribute;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $product = Product::create([
            'name' => 'Bút Chì Màu Staedtler',
            'description' => 'Bộ 12 màu Staedtler cao cấp, chất liệu gỗ tự nhiên.',
            'base_price' => 120000
        ]);

        // 🟢 Fake một biến thể của sản phẩm
        $variant = Variant::create([
            'product_id' => $product->id,
            'sku' => 'STAEDT-12C',
            'price' => 125000,
            'stock' => 50
        ]);

        // 🟢 Fake một ảnh sản phẩm
        ProductImage::create([
            'product_id' => $product->id,
            'variant_id' => $variant->id,
            'image_url' => 'https://example.com/images/staedtler-12c.jpg',
            'is_primary' => true
        ]);

        // 🟢 Fake danh sách thuộc tính
        $attribute_color = Attribute::create(['name' => 'Màu sắc']);
        $attribute_size = Attribute::create(['name' => 'Kích thước']);

        // 🟢 Fake giá trị thuộc tính cho biến thể
        VariantAttribute::create([
            'variant_id' => $variant->id,
            'attribute_id' => $attribute_color->id,
            'value' => 'Đỏ, Xanh, Vàng'
        ]);

        VariantAttribute::create([
            'variant_id' => $variant->id,
            'attribute_id' => $attribute_size->id,
            'value' => '12cm'
        ]);
    }
}
