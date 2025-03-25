@extends('layouts.layout_home')

@section('title')
    Virals
@endsection

@section('main')
    <!-- start hero section -->
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="timeline">
                    <div class="timeline-item left">
                        <i class="icon ri-stack-line"></i>
                        <div class="content">
                            <div class="d-flex">
                                <div class="swiper-slide">
                                    <a href="{{ asset('assets/images/tour/sapa2.jpg') }}" class="image-popup">
                                        <img src="{{ asset('assets/images/tour/sapa2.jpg') }}" alt=""
                                            class="img-fluid d-block" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item right">
                    <i class="icon ri-vip-diamond-line"></i>
                    <div class="content">
                        <div class="d-flex">
                            <div class="swiper-slide">
                                <a href="{{ asset('assets/images/tour/sapa3.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/tour/sapa3.jpg') }}" alt=""
                                        class="img-fluid d-block" />
                                </a>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="timeline-item left">
                    <i class="icon ri-gift-line"></i>
                    <div class="content">
                        <div class="d-flex">
                            <div class="swiper-slide">
                                <a href="{{ asset('assets/images/tour/sapa4.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/tour/sapa5.jpg') }}" alt=""
                                        class="img-fluid d-block" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item right">
                    <i class="icon ri-shield-star-line"></i>
                    <div class="content">
                        <div class="d-flex">
                            <div class="swiper-slide">
                                <a href="{{ asset('assets/images/tour/sapa6.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/tour/sapa6.jpg') }}" alt=""
                                        class="img-fluid d-block" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item left">
                    <i class="icon ri-user-smile-line"></i>
                    <div class="content">
                        <div class="d-flex">
                            <div class="swiper-slide">
                                <a href="{{ asset('assets/images/tour/sapa7.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/tour/sapa7.jpg') }}" alt=""
                                        class="img-fluid d-block" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item right">
                    <i class="icon ri-fire-line"></i>
                    <div class="content">
                        <div class="d-flex">
                            <div class="swiper-slide">
                                <a href="{{ asset('assets/images/tour/sapa8.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/tour/sapa8.jpg') }}" alt=""
                                        class="img-fluid d-block" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    </div>
    <!--end row-->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div>
                <div class="timeline-2">
                    <div class="timeline-year">
                    </div>
                    <div class="timeline-continue">
                        <div class="row timeline-right">
                            <div class="col-12">
                                <p class="timeline-date">
                                    5-7/2 2 Đêm
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="timeline-box">
                                    <div class="timeline-text">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-1">✅ Giai Đoạn 5-7/4 (2 Đêm - ALLEY HOMESTAY SAPA)</h5>
                                                <p class="text-muted mb-0">- SUP: 2P</p>
                                                <p class="text-muted mb-0">- DELUXE: 1p </p>
                                                <p class="text-muted mb-0">- VIP: 2P  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row timeline-right">
                            <div class="col-12">
                                <p class="timeline-date">
                                    Giai Đoạn 5-6/4 1 Đêm
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="timeline-box">
                                    <div class="timeline-text">
                                        {{-- <h5>Trip planning</h5> --}}
                                        <p class="text-muted">- VILLA 4PN: 1 ĐÊM</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row timeline-right">
                            <div class="col-12">
                                <p class="timeline-date">
                                    Liên Hệ
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="timeline-box">
                                    <div class="timeline-text">
                                        {{-- <h5>Trip planning</h5> --}}
                                        <p class="text-danger">Và còn rất nhiều bên khác chờ khách vào tên ạ + Quỹ 30/4 vô kể nữa ạ
                                            Ib em thông tin chi tiết cho từng đoàn nhé❤️
                                            ☎️ Hotline <a href="https://zalo.me/0387899370" target="_blank" rel="noopener noreferrer">Zalo</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
@endsection
