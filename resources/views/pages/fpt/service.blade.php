<style>
    .destination img {
    width: 180px; /* Tăng kích thước */
    height: 180px;
    object-fit: cover; /* Giữ tỉ lệ ảnh */
}

</style>
@if (Auth::check() && Auth::user()->fpt_poly == 1)
    <section class="section" id="wallet">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Lab Assignment</h2>
                        <p class="text-muted">Đặt bài tập tại đây</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none">
                        <div class="card-body py-5 px-4">
                            <img src="{{ asset('assets/images/nft/wallet/metamask.png') }}" alt=""
                                height="55" class="mb-3 pb-2">
                            <h5>Metamask</h5>
                            <p class="text-muted pb-1">MetaMask is a popular cryptocurrency wallet known for its ease of
                                use, availability on both desktops.</p>
                            <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none">
                        <div class="card-body py-5 px-4">
                            <img src="{{ asset('assets/images/nft/wallet/coinbase.png') }}" alt=""
                                height="55" class="mb-3 pb-2">
                            <h5>Coinbase Wallet</h5>
                            <p class="text-muted pb-1">Coinbase Wallet is a self-custody wallet that gives you complete
                                control of your crypto for your Wallet.</p>
                            <a href="#!" class="btn btn-info">Change Wallet</a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card text-center border shadow-none">
                        <div class="card-body py-5 px-4">
                            <img src="{{ asset('assets/images/nft/wallet/binance.png') }}" alt="" height="55"
                                class="mb-3 pb-2">
                            <h5>Binance</h5>
                            <p class="text-muted pb-1">Binance is considered a safe exchange that allows user account
                                protection via the use of Two Authentication.</p>
                            <a href="#!" class="btn btn-soft-info">Connect Wallet</a>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@else

@endif
