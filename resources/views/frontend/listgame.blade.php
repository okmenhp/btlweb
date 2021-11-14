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
    <nav>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler p-0 m-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <div id="nav-icon0">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GAME</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0">
                                    <div class="row justify-conteen-center">
                                        <div class="col-md-3">
                                            <a class="dropdown-item" href="#">Hành động</a>
                                            <a class="dropdown-item" href="#">Đối kháng</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item" href="#">Phiêu lưu</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item" href="#">Giải đố</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item" href="#">Trinh thám</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                            <div class="dropdown-menu custom-dropmenu">
                                <a class="dropdown-item" href="#">Liên minh huyền thoại</a>
                                <a class="dropdown-item" href="#">Đột kích</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
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
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/29595-285x380.jpg" alt="">
                    <a href=""><h3>Dota 2</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/460316-285x380.jpg" alt="">
                    <a href=""><h3>Brawlhalla</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/21779-285x380.jpg" alt="">
                    <a href=""><h3>League of Legends</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/493057-285x380.jpg" alt="">
                    <a href=""><h3>PUBG: BATTLEGROUNDS</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/460630-285x380.jpg" alt="">
                    <a href=""><h3>Tom Clancy's Rainbow Six Siege</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/492778073-285x380.jpg" alt="">
                    <a href=""><h3>Call of Duty: Vanguard</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/515474-285x380.jpg" alt="">
                    <a href=""><h3>Naraka: Bladepoint</h3></a>
                </div>
                <div class="col-md-3 pt-3">
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/29595-285x380.jpg" alt="">
                    <a href=""><h3>Dota 2</h3></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading"><a href="#" class="logo">Logo</a></h2>
                    <p class="menu">
                        <a href="#">Trang chủ</a>
                        <a href="#">Game</a>
                        <a href="#">Video</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Liên hệ</a>
                    </p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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