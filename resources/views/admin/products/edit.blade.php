@extends('admin.layouts.AdminLayout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4 p-4">
    <h1 class="h3 mb-0 text-gray-800">Chỉnh sửa Sản Phẩm</h1>
    <a href="{{ route('products.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fa-solid fa-arrow-left"></i> Quay lại
    </a>
</div>

<div class="card shadow mb-4 mx-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thông tin sản phẩm</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Tên sản phẩm -->
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <!-- Giá cơ bản -->
            <div class="form-group">
                <label for="base_price">Giá cơ bản (VND)</label>
                <input type="number" name="base_price" id="base_price" class="form-control" value="{{ $product->base_price }}" required>
            </div>

            <!-- Mô tả sản phẩm -->
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ $product->description }}</textarea>
            </div>

            <!-- Hình ảnh -->
            <div class="form-group">
                <label for="image">Hình ảnh</label>
                <input type="file" name="image" id="image" class="form-control">
                @foreach($product->images as $image)
                    <img src="{{ asset('storage/' . $image->image_url) }}" alt="{{ $product->name }}" width="100" class="mt-2">
                @endforeach
            </div>

            <!-- Biến thể -->
            <div class="form-group">
                <label for="variants">Biến thể</label>
                <textarea name="variants" id="variants" class="form-control" rows="3" placeholder="Nhập thông tin biến thể (VD: Màu sắc, Kích thước)"></textarea>
            </div>

            <!-- Nút Lưu -->
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-save"></i> Cập nhật sản phẩm
            </button>
        </form>
    </div>
</div>
@endsection