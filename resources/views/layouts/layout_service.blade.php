@section('menu')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="ms-auto">
        <a href="apps-nft-wallet.html" class="btn btn-success">Đăng Nhập</a>
        <a href="shoping-cart" class="btn btn-success"><i class="ri-shopping-cart-2-fill"></i></a>
    </div>
</div>
@endsection
        <!doctype html>
        <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
            data-sidebar-image="none" data-preloader="disable">

        {{-- begin head --}}
        @include('blocks.head')
      @yield('css-custom-head')
        {{-- end head --}}

        <body data-bs-spy="scroll" data-bs-target="#navbar-example">

            <!-- Begin page -->
            <div class="layout-wrapper landing">

                {{-- begin nav --}}
                @include('blocks.menu')
                <!-- end navbar -->

                {{-- begin main --}}
                @yield('main')
                {{-- end main --}}

                <!-- Start footer -->
                @include('blocks.footer')
                <!-- end footer -->

                <!--start back-to-top-->
                <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
                    <i class="ri-arrow-up-line"></i>
                </button>
                <!--end back-to-top-->

            </div>
            <!-- end layout wrapper -->


            <!-- JAVASCRIPT -->
            @include('blocks.js')

        </body>

        </html>
