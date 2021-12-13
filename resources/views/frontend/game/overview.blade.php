<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/ionicons/ionicons.min.css') }}"> --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>




    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/videopopup.css') }}">
    <script src="{{ asset('assets/js/videopopup.js') }}"></script>



</head>

<body>
    <a id="button"></a>
    <!-- Navigation -->
    @include('frontend.components.navigation')
    <!-- End Navigation -->

    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('uploads/games/'. $game->photo_url) }}" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <div class="m-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách game</li>
                    </ol>
                </div>
                <div class="overview-title m-3">
                    <h1>{{$game->name}}</h1>
                </div>
                <div class="row button-view-more m-3">
                    <a href="{{$game->link}}" class="btn-more m-0">Tải game</a>
                </div>
            </div>
        </div>
        <div class="row pt-4">
           <div class="container overview-content p-3">
                <div class="intro">
                    <h4 class="pb-2">Giới thiệu</h4>
                    {!!$game->review!!}
                </div>
                <div class="general">
                    <h4 class="pb-0">Tổng quan</h4>
                    <h5>Thể loại: <span>{!!$game_types!!}</span></h5>
                    <h5>Cấu hình: 
                        <br>
                        <span>CPU: {!!$game_config->cpu!!}</span>
                        <br>
                        <span>RAM: {!!$game_config->ram!!}</span>
                        <br>
                        <span>VGA: {!!$game_config->vga!!}</span>
                        <br>
                        <span>Ổ cứng: {!!$game_config->hard_drive!!}</span>
                        <br>
                        <span>Win: {!!$game_config->os!!}</span>
                    </h5>
                    <h5>Nhà phát hành: <span>{!!$game->studio!!}</span></h5>
                    <h5>Đánh giá: <span>{!!$game->rate!!}</span></h5>
                </div>
                {{-- <div class="intro-img pt-4">
                    <h4 class="pb-2">hình ảnh</h4>
                    <img class="p-1" src="https://s3-ap-southeast-1.amazonaws.com/images.spiderum.com/sp-images/74f63120fe5b11e78be6e778098cdb44.jpg" alt="" srcset="">
                    <img class="p-1" src="https://s3-ap-southeast-1.amazonaws.com/images.spiderum.com/sp-images/dd930b90fe5b11e7a415917cd419be8d.jpg" alt="" srcset="">
                </div> --}}
           </div>
        </div>
    </div>

    <!-- Footer -->
    @include('frontend.components.footer')
    <!-- End Footer -->
</body>

<script>
    $(document).ready(function() {
        $('#nav-icon0,#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function() {
            $(this).toggleClass('open');
        });
    });
</script>
<script>
    $('.slider-responsive').slick({
        dots: true,
        infinite: true,
        prevArrow: null,
        nextArrow: null,
        autoplay: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
</script>
<script>
    $(".play").videoPopup();
</script>
<script>
    var btn = $('#button');
    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
    });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });


</script>