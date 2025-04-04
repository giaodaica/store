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
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-01.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                            <h5 class="mb-1"><a href="detail">Creative Filtered </a></h5>
                            <p class="text-muted mb-0">Photography</p>
                        </div>
                        <div class="card-footer border-top border-top-dashed">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 fs-14">
                                    <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">75.3ETH</span>
                                </div>
                                <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 element-item photography">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-02.jpg') }}" alt="" class="card-img-top explore-img" />
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
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/11.avif') }}" alt="" class="card-img-top explore-img" />
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
                <div class="col-lg-3 element-item photography">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-04.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face </a></h5>
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
                <div class="col-lg-3 element-item photography">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-05.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
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
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-06.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>

                <div class="col-lg-3 element-item photography">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-07.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-08.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item development">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-09.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item photography">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-product-10.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/12.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item project">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/13.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/14.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/15.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/16.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/17.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/18.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/19.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item designing">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/20.avif') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>
                <div class="col-lg-3 element-item artwork music crypto-card">
                    <div class="card explore-box card-animate">
                        <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                            <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                        </div>
                        <div class="explore-place-bid-img">
                            <img src="{{ asset('assets/images/demo-fashion-store-banner-03.jpg') }}" alt="" class="card-img-top explore-img" />
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
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
                </div>

        </div>
        <!-- end row -->

        <div class="text-center my-2">
            <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
        </div>
    </div>
</div></div>


@endsection
