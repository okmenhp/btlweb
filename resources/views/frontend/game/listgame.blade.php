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

    <div class="container">
        <div class="m-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách game</li>
            </ol>
        </div>
        <div class="container pb-2">
            <div class="row list-game">
                @foreach ($games as $record)
                    <a href="{{route('game.detail', ['id'=>$record->id])}}" class="col-md-3 pt-3 d-flex flex-column">
                        <img src="{{asset('uploads/games/'. $record->photo_url)}}" alt="" style="height: 12em; object-fit: contain; background: #23262d">
                        <h3>{{$record->name}}</h3>
                    </a>
                @endforeach
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