
        <!doctype html>
        <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
            data-sidebar-image="none" data-preloader="disable">

        {{-- begin head --}}
        @include('blocks.head')
        <style>
            .navbar-landing {
            padding: 10px 0;
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
            background: currentColor; /* Đổi sang màu mong muốn */
        }

            </style>
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
