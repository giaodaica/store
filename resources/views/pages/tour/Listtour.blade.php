@extends('layouts.layout_service')
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
    <!-- start fpt -->
    {{-- @include('pages.fpt.service') --}}
    <!-- end fpt -->

    <!-- start marketplace -->
    <section class="section bg-light" id="marketplace">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Du lịch</h2>
                        <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">
                            <li class="nav-item" role="presentation">
                                {{-- <button class="nav-link fw-medium active" type="button" data-filter="all">All Items</button> --}}
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="artwork">Sapa</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="music">Music</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="games">Games</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="crypto-card">Crypto Card</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-medium" type="button" data-filter="3d-style">3d Style</button>
                            </li> --}}
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/tour/sapa1.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="tour/sapa" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i>Chi tiết</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p> --}}
                            <h5 class="mb-1"><a href="#"> 𝐀𝐋𝐋𝐄𝐘 𝐇𝐎𝐌𝐄𝐒𝐓𝐀𝐘 𝐒𝐀𝐏𝐀</a></h5>
                            <a href="https://www.facebook.com/thutrandulich?locale=vi_VN" target="_blank" rel="noopener noreferrer">Trần Thu</a>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    {{-- <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">75.3ETH</span> --}}
                                </div>
                                {{-- <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 product-item music crypto-card games">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/nft/img-02.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">The Chirstoper</a></h5>
                            <p class="text-muted mb-0">Music</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">412.30ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item artwork music games">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="https://img.themesbrand.com/velzon/images/img-4.gif" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                            <p class="text-muted mb-0">Video</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">2.75ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item crypto-card 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/nft/img-01.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                            <p class="text-muted mb-0">Collectibles</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">122.34ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item games music 3d-style">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/nft/img-05.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                            <p class="text-muted mb-0">Artwork</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">874.01ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 product-item artwork music crypto-card">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/nft/img-06.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="text-muted mb-0">Artwork</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">41.658 ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div><!-- end container -->
    </section>

    <!-- end marketplace -->

    <!-- start service -->
    {{-- @include('pages.home.service') --}}
    <!-- end service -->

    <!-- start category -->
    {{-- @include('pages.home.category') --}}
    <!-- end category -->

    <!-- start Discover Items-->
    {{-- <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-5">
                        <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Discover Items</h2>
                        <a href="apps-nft-explore.html" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Nancy Martino</h6></a>
                                    <p class="mb-0 text-muted fs-13">Owners</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="{{ asset('assets/images/nft/img-05.jpg') }}" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Patterns arts &amp; culture</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/users/avatar-9.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Henry Baird</h6></a>
                                    <p class="mb-0 text-muted fs-13">Creators</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="{{ asset('assets/images/nft/img-03.jpg') }}" alt="" class="explore-img w-100">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 31.64k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 475.23 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Evolved Reality</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card explore-box card-animate border">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                <div class="ms-2 flex-grow-1">
                                    <a href="#!"><h6 class="mb-0 fs-15">Diana Kohler</h6></a>
                                    <p class="mb-0 text-muted fs-13">Owners</p>
                                </div>
                                <div class="bookmark-icon">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                            </div>
                            <div class="explore-place-bid-img overflow-hidden rounded">
                                <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid explore-img">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.34k </p>
                                <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 701.38 ETH </h5>
                                <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Long-tailed macaque</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section> --}}
    <!--end Discover Items-->

    <!-- start Work Process -->
    {{-- <section class="section bg-light" id="creators">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Top Creator This Week</h2>
                        <p class="text-muted">NFTs are valuable because they verify the authenticity of a non-fungible asset. This makes these assets unique and one of a kind.</p>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="{{ asset('assets/images/nft/img-01.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">Timothy Smith</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 4,754 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">Alexis Clarke</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 81,369 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="{{ asset('assets/images/nft/img-06.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">Glen Matney</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,156 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="https://img.themesbrand.com/velzon/images/img-5.gif" alt="" class="avatar-sm object-fit-cover rounded">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">Herbert Stokes</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 34,754 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="{{ asset('assets/images/users/avatar-8.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">Michael Morris</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,841 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="{{ asset('assets/images/nft/img-02.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="pages-profile.html">
                                        <h5 class="mb-1">James Morris</h5>
                                    </a>
                                    <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 63,710 ETH</p>
                                </div>
                                <div>
                                    <div class="dropdown float-end">
                                        <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle fs-16"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div><!-- end container -->
    </section> --}}
    <!-- end Work Process -->

    <!-- start cta -->
    {{-- <section class="py-5 bg-primary position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Create and Sell Your NFT's</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="apps-nft-create.html" class="btn bg-gradient btn-danger">Create NFT</a>
                        <a href="apps-nft-explore.html" class="btn bg-gradient btn-info">Discover More</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section> --}}
    <!-- end cta -->
@endsection
