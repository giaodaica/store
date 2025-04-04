@extends('layouts.layout_home')
@section('title')
    Virals
@endsection
@section('main')
      <!-- start hero section -->
    @include('blocks.banner')
    @section('css-custom')
<style>

</style>
    @endsection
@section('menu')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
        <li class="nav-item">
            <a class="nav-link active" href="#hero">Trang Trủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#wallet">Wallet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#marketplace">Sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#categories">Tương tác</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#creators">Tác giả</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tour">Du lịch</a>
        </li>
    </ul>
    <div class="">
        @if(Auth::check())

        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->username }}</button>
            <div class="dropdown-menu dropdownmenu-success">
                @if(Auth::user()->role != 'guest')
                <a class="dropdown-item" href="admin">Admin</a>
                @else
                <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                @endif
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
               <form action="logout" method="post">
                @csrf
                <div class="text-center">
                    <button class="btn btn-close-white">Đăng xuất</button>
                </div>
               </form>
            </div>
        </div>

        @else
        <a href="login" class="btn btn-success">Đăng Nhập</a>

        @endif
        <a href="shoping-cart" class="btn btn-success"><i class="ri-shopping-cart-2-fill"></i></a>
    </div>
</div>
@endsection
    <!-- start fpt -->
    @include('pages.fpt.service')
    <!-- end fpt -->

    <!-- start marketplace -->
    @include('pages.home.product')
    <!-- end marketplace -->

    <!-- start service -->
    {{-- @include('pages.home.service') --}}
    <!-- end service -->

    <!-- start category -->
    {{-- @include('pages.home.category') --}}
    <!-- end category -->

    <!-- start Discover Items-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-5">
                        <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Tin tức</h2>
                        <a href="apps-nft-explore.html" class="btn btn-primary">Xem tất cả <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/dibu.webp') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Emiliano Martínez</h6></a>
                                    <p class="mb-0 text-muted fs-13">Tác giả</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="{{ asset('assets/images/dibu.webp') }}" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Áo adidas này ok lắm</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/khidot.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">vinicius</h6></a>
                                    <p class="mb-0 text-muted fs-13">vinicius</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="{{ asset('assets/images/khidot.jpg') }}" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> vinicius</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 31.64k </p>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Áo này đẹp hơn</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/enzo.webp') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">enzo fernández</h6></a>
                                    <p class="mb-0 text-muted fs-13">enzo fernández</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="assets/images/enzo.webp" alt="" class="img-fluid explore-img">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> enzo fernández</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.34k </p>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">2 khứa này hài</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end Discover Items-->

    <!-- start Work Process -->

    <!-- end Work Process -->

    <!-- start cta -->

    <!-- end cta -->
@endsection
