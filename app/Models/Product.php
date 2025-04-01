<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'base_price'];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function variantAttributes()
    {
        return $this->hasManyThrough(
            VariantAttribute::class, // Model bảng variant_attributes
            Variant::class,          // Model bảng variants
            'product_id',            // Khóa ngoại trên bảng variants
            'variant_id',            // Khóa ngoại trên bảng variant_attributes
            'id',                    // Khóa chính trên bảng products
            'id'                     // Khóa chính trên bảng variants
        );
    }
}
