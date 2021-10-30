<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <title>Admin</title>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="top mt-3 mb-5 mx-5 ">
                <h4 class="mb-0 text-light text-center text-nowrap w-100">Admin Desk</h4>
            </div>
            <div class="d-flex align-items-center pl-4 mb-1">
                <ion-icon name="home" class="icon-sidebar pr-2"></ion-icon>
                <a href="javascript:void(0)" class="">Trang chủ</a>
            </div>
            <div class="box news-box mt-3">
                <div class="d-flex align-items-center pl-4">
                    <ion-icon name="newspaper" class="icon-sidebar pr-2"></ion-icon>
                    <a href="javascript:void(0)" class="extend-btn">Tin tức</a>
                </div>
                <div class="box-extend news-box-extend pl-4 mt-1">
                    <div class="py-2 d-flex flex-column">
                        <a href="" class="pb-2">Bài viết mới</a>
                        <a href="" class="">Tất cả bài viết</a>
                    </div>
                </div>
            </div>
            <div class="box news-box mt-3">
                <div class="d-flex align-items-center pl-4">
                    <ion-icon name="game-controller" class="icon-sidebar pr-2"></ion-icon>
                    <a href="javascript:void(0)" class="extend-btn">Game</a>
                </div>
                <div class="box-extend news-box-extend pl-4 mt-1">
                    <div class="py-2 d-flex flex-column">
                        <a href="" class="pb-2">Thêm mới</a>
                        <a href="" class="">Thể loại</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="header d-flex justify-content-end align-items-center py-2 pr-5">
                <img class="user-img mr-1" src="{{asset('assets/images/admin/user.png')}}" alt="user">
                <h4 class="user-name mb-0">admin1</h4>
            </div>
        </div>
    </div>

    {{-- script --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>
</html>