@if(!isset($_SESSION['user']))
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Create and Sell Your NFTs</h2>
                    <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/nft/wallet.png') }}" alt="" class="avatar-sm">
                        <h5 class="mt-4">Set up your wallet</h5>
                        <p class="text-muted fs-14">You have to choose whether to use a hot wallet a cold wallet.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/nft/money.png') }}" alt="" class="avatar-sm">
                        <h5 class="mt-4">Create your collection</h5>
                        <p class="text-muted fs-14">Create a collection in Opensea and give it a proper art.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/nft/add.png') }}" alt="" class="avatar-sm">
                        <h5 class="mt-4">Add your NFT's</h5>
                        <p class="text-muted fs-14">Go to your profile icon and top right corner creation page.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/nft/sell.png') }}" alt="" class="avatar-sm">
                        <h5 class="mt-4">Sell Your NFT's</h5>
                        <p class="text-muted fs-14">Create a collection in Opensea and give Add items and art.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- end container -->
</section>

@endif
