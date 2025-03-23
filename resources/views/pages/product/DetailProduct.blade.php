@extends('layouts.layout_service')
@section('css-custom-head')
<style>
    .navbar-landing {
    padding: 10px 0;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
    background: currentColor; /* Đổi sang màu mong muốn */
}

    </style>
@endsection
@section('title')
    Virals
@endsection
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-4 col-md-8 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="{{ asset('build/assets/images/products/img-8.png') }}"
                                                class="image-popup">
                                                <img src="{{ asset('build/assets/images/products/img-8.png') }}"
                                                    alt="" class="img-fluid d-block" />
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                           <a href="{{ asset('build/assets/images/products/img-6.png') }}" class="image-popup">
                                            <img src="{{ asset('build/assets/images/products/img-6.png') }}" alt=""
                                            class="img-fluid d-block" />
                                           </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ asset('build/assets/images/products/img-1.png') }}" class="image-popup">
                                             <img src="{{ asset('build/assets/images/products/img-1.png') }}" alt=""
                                             class="img-fluid d-block" />
                                            </a>
                                         </div>
                                         <div class="swiper-slide">
                                            <a href="{{ asset('build/assets/images/products/img-7.png') }}" class="image-popup">
                                             <img src="{{ asset('build/assets/images/products/img-7.png') }}" alt=""
                                             class="img-fluid d-block" />
                                            </a>
                                         </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- end swiper thumbnail slide -->
                                <div class="swiper product-nav-slider mt-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('build/assets/images/products/img-8.png') }}"
                                                    alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('build/assets/images/products/img-6.png') }}"
                                                    alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('build/assets/images/products/img-1.png') }}"
                                                    alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('build/assets/images/products/img-7.png') }}"
                                                    alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-8">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h4>Full Sleeve Sweatshirt for Men (Pink)</h4>
                                        <div class="hstack gap-3 flex-wrap">
                                            <div><a href="#" class="text-primary d-block">Tommy Hilfiger</a></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Seller : <span class="text-body fw-medium">Zoetic
                                                    Fashion</span></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Published : <span class="text-body fw-medium">26 Mar,
                                                    2021</span></div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div>
                                            <a href="apps-ecommerce-add-product.html" class="btn btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                    class="ri-pencil-fill align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                    <div class="text-muted fs-16">
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                        <span class="mdi mdi-star text-warning"></span>
                                    </div>
                                    <div class="text-muted">( 5.50k Customer Review )</div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="p-2 border border-dashed rounded">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-2">
                                                    <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                        <i class="ri-money-dollar-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-1">Price :</p>
                                                    <h5 class="mb-0">$120.40</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="">
                                    {{-- form --}}
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mt-4">
                                            <h5 class="fs-14">Sizes :</h5>
                                            <div class="d-flex flex-wrap gap-2">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="top" title="Out of Stock">
                                                    <input type="radio" class="btn-check" name="productsize-radio"
                                                        id="productsize-radio1" >
                                                    <label
                                                        class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center"
                                                        for="productsize-radio1">S</label>
                                                </div>

                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="top" title="04 Items Available">
                                                    <input type="radio" class="btn-check" name="productsize-radio"
                                                        id="productsize-radio2">
                                                    <label
                                                        class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center"
                                                        for="productsize-radio2">M</label>
                                                </div>
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="top" title="06 Items Available">
                                                    <input type="radio" class="btn-check" name="productsize-radio"
                                                        id="productsize-radio3">
                                                    <label
                                                        class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center"
                                                        for="productsize-radio3">L</label>
                                                </div>

                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-placement="top" title="Out of Stock">
                                                    <input type="radio" class="btn-check" name="productsize-radio"
                                                        id="productsize-radio4" >
                                                    <label
                                                        class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center"
                                                        for="productsize-radio4">XL</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->


                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                                <div class="col-xl-6">
                                    <div class=" mt-4">
                                        <h5 class="fs-14">Colors :</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Out of Stock">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary"
                                                    disabled>
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="03 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="03 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="02 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-info">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="01 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="04 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="03 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="04 Items Available">
                                                <button type="button"
                                                    class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body">
                                                    <i class="ri-checkbox-blank-circle-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- form --}}
                               <div>
                                <button style="margin-top: 20px" class="btn btn-primary"><i class=" ri-shopping-cart-2-fill"> Đặt Hàng</i></button>
                               </div>
                                </form>
                                <div class="mt-4 text-muted">
                                    <h5 class="fs-14">Description :</h5>
                                    <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material composition
                                        is 100% organic cotton. This is one of the world’s leading designer lifestyle brands
                                        and is internationally recognized for celebrating the essence of classic American
                                        cool style, featuring preppy with a twist designs.</p>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <h5 class="fs-14">Features :</h5>
                                            <ul class="list-unstyled">
                                                <li class="py-1"><i
                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                    Full Sleeve</li>
                                                <li class="py-1"><i
                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                    Cotton</li>
                                                <li class="py-1"><i
                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> All
                                                    Sizes available</li>
                                                <li class="py-1"><i
                                                        class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> 4
                                                    Different Color</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-3">
                                            <h5 class="fs-14">Services :</h5>
                                            <ul class="list-unstyled product-desc-list">
                                                <li class="py-1">10 Days Replacement</li>
                                                <li class="py-1">Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-content mt-5">
                                    <h5 class="fs-14 mb-3">Product Description :</h5>
                                    <nav>
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab"
                                                    href="#nav-speci" role="tab" aria-controls="nav-speci"
                                                    aria-selected="true">Specification</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab"
                                                    href="#nav-detail" role="tab" aria-controls="nav-detail"
                                                    aria-selected="false">Details</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-speci" role="tabpanel"
                                            aria-labelledby="nav-speci-tab">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 200px;">Category</th>
                                                            <td>T-Shirt</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Brand</th>
                                                            <td>Tommy Hilfiger</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Color</th>
                                                            <td>Blue</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Material</th>
                                                            <td>Cotton</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Weight</th>
                                                            <td>140 Gram</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                                            aria-labelledby="nav-detail-tab">
                                            <div>
                                                <h5 class="font-size-16 mb-3">Tommy Hilfiger Sweatshirt for Men (Pink)</h5>
                                                <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material
                                                    composition is 100% organic cotton. This is one of the world’s leading
                                                    designer lifestyle brands and is internationally recognized for
                                                    celebrating the essence of classic American cool style, featuring preppy
                                                    with a twist designs.</p>
                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                        Machine Wash</p>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                        Fit Type: Regular</p>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                        100% Cotton</p>
                                                    <p class="mb-0"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                        Long sleeve</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-content -->

                                <div class="mt-5">
                                    <div>
                                        <h5 class="fs-14 mb-3">Ratings & Reviews</h5>
                                    </div>
                                    <div class="row gy-4 gx-0">

                                        <!-- end col -->

                                        <div class="">
                                            <div class="ps-lg-4">
                                                <div class="d-flex flex-wrap align-items-start gap-3">
                                                    <h5 class="fs-14">Reviews: </h5>
                                                </div>

                                                <div class="me-lg-n3 pe-lg-4" data-simplebar style="max-height: 225px;">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-2">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="d-flex align-items-start mb-3">
                                                                    <div class="hstack gap-3">
                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                            <i class="mdi mdi-star"></i> 4.2
                                                                        </div>
                                                                        <div class="vr"></div>
                                                                        <div class="flex-grow-1">
                                                                            <p class="text-muted mb-0"> Superb sweatshirt.
                                                                                I loved it. It is for winter.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex flex-grow-1 gap-2 mb-3">
                                                                    <a href="#" class="d-block">
                                                                        <img src="{{ asset('build/assets/images/small/img-12.jpg') }}"
                                                                            alt=""
                                                                            class="avatar-sm rounded object-fit-cover">
                                                                    </a>
                                                                    <a href="#" class="d-block">
                                                                        <img src="{{ asset('build/assets/images/small/img-11.jpg') }}"
                                                                            alt=""
                                                                            class="avatar-sm rounded object-fit-cover">
                                                                    </a>
                                                                    <a href="#" class="d-block">
                                                                        <img src="{{ asset('build/assets/images/small/img-10.jpg') }}"
                                                                            alt=""
                                                                            class="avatar-sm rounded object-fit-cover">
                                                                    </a>
                                                                </div>

                                                                <div class="d-flex align-items-end">
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="fs-14 mb-0">Henry</h5>
                                                                    </div>

                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">12 Jul, 21</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="py-2">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="d-flex align-items-start mb-3">
                                                                    <div class="hstack gap-3">
                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                            <i class="mdi mdi-star"></i> 4.0
                                                                        </div>
                                                                        <div class="vr"></div>
                                                                        <div class="flex-grow-1">
                                                                            <p class="text-muted mb-0"> Great at this
                                                                                price, Product quality and look is awesome.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-end">
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="fs-14 mb-0">Nancy</h5>
                                                                    </div>

                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">06 Jul, 21</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="py-2">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="d-flex align-items-start mb-3">
                                                                    <div class="hstack gap-3">
                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                            <i class="mdi mdi-star"></i> 4.2
                                                                        </div>
                                                                        <div class="vr"></div>
                                                                        <div class="flex-grow-1">
                                                                            <p class="text-muted mb-0">Good product. I am
                                                                                so happy.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-end">
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="fs-14 mb-0">Joseph</h5>
                                                                    </div>

                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">06 Jul, 21</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="py-2">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="d-flex align-items-start mb-3">
                                                                    <div class="hstack gap-3">
                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                            <i class="mdi mdi-star"></i> 4.1
                                                                        </div>
                                                                        <div class="vr"></div>
                                                                        <div class="flex-grow-1">
                                                                            <p class="text-muted mb-0">Nice Product, Good
                                                                                Quality.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-end">
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="fs-14 mb-0">Jimmy</h5>
                                                                    </div>

                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">24 Jun, 21</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Floating Input -->
                                                <div class="form-floating">
                                                    <input type="text" class="form-control"
                                                        id="firstnamefloatingInput" placeholder="Enter your firstname">
                                                    <label for="firstnamefloatingInput">Nhận xét</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end Ratings & Reviews -->
                                </div>
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Swiper -->
                    <div class="swiper responsive-swiper rounded gallery-light pb-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="{{ asset('build/assets/images/small/img-1.jpg') }}" title="">
                                            <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/small/img-1.jpg') }}" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ron Mackie</a></div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-3">
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                    </button>
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="{{ asset('build/assets/images/small/img-2.jpg') }}" title="">
                                            <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/small/img-2.jpg') }}" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Working at a coffee shop</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a></div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-3">
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                    </button>
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-box card mb-0">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="{{ asset('build/assets/images/small/img-10.jpg') }}" title="">
                                            <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/small/img-10.jpg') }}" alt="">
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a></div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-3">
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                    </button>
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="{{ asset('build/assets/images/small/img-4.jpg') }}" title="">
                                            <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/small/img-4.jpg') }}" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Drawing a sketch</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Jason McQuaid</a></div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-3">
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 825
                                                    </button>
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 101
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-box card">
                                    <div class="gallery-container">
                                        <a class="image-popup" href="{{ asset('build/assets/images/small/img-6.jpg') }}" title="">
                                            <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/small/img-6.jpg') }}" alt="" />
                                            <div class="gallery-overlay">
                                                <h5 class="overlay-caption">Project discussion with team</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a></div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-3">
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                    </button>
                                                    <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                        <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
@endsection
