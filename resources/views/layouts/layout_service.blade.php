@section('menu')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="ms-auto">
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
