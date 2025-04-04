@section('menu')
<style>
   input[type="text"] {
    width: 400px !important;
    border-radius: 5px;
    height: 40px;
}
</style>
<form action="search" method="POST">
    @csrf
    <input type="text" class="form-control" name="search" id="search-options" placeholder="Tìm kiếm..." autocomplete="off">
    <ul id="searchResults" style="list-style: none; padding: 0; margin: 0; border: 1px solid #ccc; position: absolute;"></ul>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Khi người dùng nhập vào ô tìm kiếm
    $('#search-options').on('keyup', function() {
        var searchTerm = $(this).val();

        // Nếu từ khóa tìm kiếm dài hơn 2 ký tự
        if (searchTerm.length > 2) {
            // Gửi yêu cầu AJAX tới server
            $.ajax({
                url: "{{ route('autocomplete') }}", // Route của bạn để tìm kiếm
                method: "GET",
                data: {
                    query: searchTerm
                },
                success: function(data) {
                    // Xóa kết quả tìm kiếm cũ
                    $('#searchResults').empty();

                    // Kiểm tra nếu có kết quả trả về
                    if (data.length > 0) {
                        // Lặp qua dữ liệu và hiển thị dưới dạng danh sách
                        data.forEach(function(item) {
                            $('#searchResults').append('<li><a href="shop" class="bg-white">' + item.name + '</a></li>');
                        });
                    } else {
                        $('#searchResults').append('<li>Không tìm thấy kết quả</li>');
                    }
                }
            });
        } else {
            // Nếu không có từ khóa hoặc từ khóa quá ngắn, ẩn kết quả
            $('#searchResults').empty();
        }
    });

    // Đóng kết quả khi người dùng click ra ngoài
    $(document).click(function(e) {
        if (!$(e.target).closest('#search-options').length) {
            $('#searchResults').empty();
        }
    });
</script>
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
