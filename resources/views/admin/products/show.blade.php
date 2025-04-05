@extends('admin.layouts.AdminLayout')

@section('content')

<div class="px-5">
<div class="d-sm-flex align-items-center justify-content-between mb-4 p-4">
    <h1 class="h3 mb-0 text-gray-800">Chi tiết sản phẩm</h1>
    <a href="{{ route('products.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fa-solid fa-arrow-left"></i> Quay lại
    </a>
</div>
<p><strong>Tên:</strong> {{ $product->name }}</p>
<p><strong>Giá cơ bản:</strong> {{ number_format($product->base_price, 0, ',', '.') }} VND</p>
<p><strong>Mô tả:</strong> {{ $product->description }}</p>

<h3>Hình ảnh:</h3>
@foreach($product->images as $image)
    <img src="{{ asset('storage/' . $image->image_url) }}" alt="{{ $product->name }}" width="200">
@endforeach

<h3>Biến thể:</h3>
<ul>
    @foreach($product->variants as $variant)
        <li>SKU: {{ $variant->sku }}, Giá: {{ $variant->price }}, Tồn kho: {{ $variant->stock }}</li>
    @endforeach
</ul>

<a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Chỉnh sửa</a>
</div>
@endsection