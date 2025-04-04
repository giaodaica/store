@extends('layouts.layout_service')
@section('css-custom-head')
<style>
    .btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active {
    color: var(--vz-btn-active-color);
    background-color: black !important;
    border-color: var(--vz-btn-active-border-color);
}
.row .gallery-wrapper{
    padding-top: 20px;
}
</style>
@endsection
@section('title')
    Virals
@endsection
@include('blocks.banner')
@section('main')
<div class="container" style="padding-top: 20px"><div class="row">
    <div class="col-lg-12">
        <div class="text-center">

        </div>
        <!-- Placement Offcanvas -->
       <!-- Placement Offcanvas -->
<div class="d-flex flex-wrap gap-2">
    <button class="btn btn-success ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Bộ lọc</button>
</div>
        <!-- bottom offcanvas -->
<!-- left offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasLeftLabel">Bộ lọc</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="filter-group categories-filter" data-type="category">
            <h6>Danh Mục</h6>
            {{-- <label><input type="checkbox" value="*" checked> All</label> --}}
            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" checked value="*">
            <label class="btn btn-success" for="btncheck1">Tất cả</label>

            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value=".project">
            <label class="btn btn-success" for="btncheck2">Áo thun nam</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value=".designing">
            <label class="btn btn-success" for="btncheck3">Áo thun nam loại 1</label>

            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" value=".photography">
            <label class="btn btn-success" for="btncheck4">Áo thun nữ</label>

            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off" value=".development">
            <label class="btn btn-success" for="btncheck5">Áo vest nam</label>
        </div>
    </div>
</div>
{{-- end-offcanvas --}}
        <div class="row gallery-wrapper">
              @foreach($product as $key => $value)
              <div class="col-lg-3 element-item project">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="{{ asset('assets/' . $value['image']) }}" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="detail" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Xem</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                        <h5 class="mb-1"><a href="detail">{{ $value['name']}} </a></h5>
                        <p class="text-muted mb-0">{{ $value['category']}}</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Giá: <span class="fw-medium">{{ $value['price']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach


        </div>
        <!-- end row -->

        <div class="text-center my-2">
            <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
        </div>
    </div>
</div></div>


@endsection
