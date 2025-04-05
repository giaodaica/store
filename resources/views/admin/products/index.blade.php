@extends('admin.layouts.AdminLayout')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4 p-4">
    <h1 class="h3 mb-0 text-gray-800">Quản lý Sản phẩm</h1>
    <a href="{{route('products.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-plus" style="color: #fcfcfc;"></i> Thêm sản phẩm </a>
</div>
<div class="card shadow mb-4 mx-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá cơ bản</th>
                        <th>Hình ảnh</th>
                        <th>Biến thể</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá cơ bản</th>
                        <th>Hình ảnh</th>
                        <th>Biến thể</th>
                        <th>Hành động</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->base_price, 0, ',', '.') }} VND</td>
                        <td>
                            @foreach ($product->images as $image)
                            <img src="{{ asset('storage/' . $image->image_url) }}" alt="Product Image" class="img-thumbnail" style="width: 50px; height: 50px;">
                            @endforeach
                        </td>
                        <td>
                            @foreach ($product->variants as $variant)
                            <div>
                                <strong>SKU:</strong> {{ $variant->sku }}<br>
                                <strong>Giá:</strong> {{ number_format($variant->price, 0, ',', '.') }} VND<br>
    
                             
                            </div>
                            @endforeach
                        </td>
                        <td>
                            <form action="{{ route('products.show', $product->id) }}" method="GET" style="display: inline-block">
                                @csrf
                                <button type="submit" class="btn btn-info btn-sm p-2">
                                <i class="fa fa-eye"></i> Xem
                                </button>
                            </form>
                            <!-- Nút Sửa -->
                            <form action="{{ route('products.edit', $product->id) }}" method="GET" style="display: inline-block">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm p-2">
                                <i class="fa fa-edit"></i> Sửa
                                </button>
                            </form>
                            <!-- Nút Xóa -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm p-2" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                    <i class="fa fa-trash"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection