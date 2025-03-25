@if(isset($_SESSION['collage']))
<section class="section" id="wallet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Connect NFT Marketplace</h2>
                    <p class="text-muted">A non-fungible token is a non-interchangeable unit of data stored on a blockchain, a form of digital ledger, that can be sold and traded.</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card text-center border shadow-none">
                    <div class="card-body py-5 px-4">
                        <img src="{{ asset('assets/images/nft/wallet/metamask.png') }}" alt="" height="55" class="mb-3 pb-2">
                        <h5>Metamask</h5>
                        <p class="text-muted pb-1">MetaMask is a popular cryptocurrency wallet known for its ease of use, availability on both desktops.</p>
                        <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4">
                <div class="card text-center border shadow-none">
                    <div class="card-body py-5 px-4">
                        <img src="{{ asset('assets/images/nft/wallet/coinbase.png') }}" alt="" height="55" class="mb-3 pb-2">
                        <h5>Coinbase Wallet</h5>
                        <p class="text-muted pb-1">Coinbase Wallet is a self-custody wallet that gives you complete control of your crypto for your Wallet.</p>
                        <a href="#!" class="btn btn-info">Change Wallet</a>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="card text-center border shadow-none">
                    <div class="card-body py-5 px-4">
                        <img src="{{ asset('assets/images/nft/wallet/binance.png') }}" alt="" height="55" class="mb-3 pb-2">
                        <h5>Binance</h5>
                        <p class="text-muted pb-1">Binance is considered a safe exchange that allows user account protection via the use of Two Authentication.</p>
                        <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@else
<section class="section" id="wallet">
    <div class="">
        <div class="col-lg-12">
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Du lịch</h2>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="card-body">
                    <div class="swiper effect-coverflow-swiper rounded pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/tour/sapa2.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/tour/sapa3.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/tour/sapa4.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/tour/sapa5.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/tour/sapa1.jpg') }}" alt="" class="img-fluid" />
                            </div>
                            
                        </div>
                        <div class="swiper-pagination swiper-pagination-dark"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <div class="text-center my-2">
            <a href="tour" class="btn btn-success">Xem Thêm</a>
        </div>
    </div><!-- end container -->
</section>
@endif
