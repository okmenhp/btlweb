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
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}"/>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
</head>
<body>
    {{-- Header --}}
    
    <div class="header">
        <div class="container border-bottom border-header">
            <div class="row">
                <div class="col-md-6 p-0">
                    <h2>LOGO</h2>
                </div>
                <div class="col-md-6 p-0 d-flex flex-column justify-content-center align-items-end">
                    <div class="social-btns">
                        <a class="btn facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="btn google" href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a class="btn linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="btn instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Nav --}}
    <nav>
        <div class="container">
            <div class="row">
                <div class="menu col-md-9 p-0">
                    <ul>
                        <li><a href="" class="active">Trang chủ</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Sự kiện</a></li>
                        <li><a href="">Video</a></li>
                    </ul>
                </div>
                <div class="col-md-3 nav-right p-0 d-flex flex-column justify-content-center">
                    <div class="row form-search">
                            <form action="" class="search-input m-0">
                                <input type="text" class="input">
                            </form>   
                          <button class="btn-search"><i class="fa fa-search"></i></button>  
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{--  --}}
    <div class="news pt-5 pb-5">
       
    </div> 
    {{-- Footer --}}
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col footer-logo d-flex justify-content-center">
                    <h2>LOGO</h2>
                </div>
            </div>
            <div class="row footer-menu d-flex justify-content-center">  
                <ul>
                    <li class="border-right"><a href="">Trang chủ</a></li>
                    <li class="border-right"><a href="">Tin tức</a></li>
                    <li class="border-right"><a href="">Sự kiện</a></li>
                    <li><a href="">Video</a></li>
                </ul>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="title-social">
                    <p>FOLLOW</p>
                </div>
            </div>
            <div class="row footer-social d-flex justify-content-center">
                <div class="social-btns pb-4">
                    <a class="btn facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="btn google" href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                    <a class="btn linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="btn instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.carousel').slick({
    arrows: false,
    autoplay: true,    
    autoplaySpeed: 1500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
        slidesToShow: 4
        }
    }, {
        breakpoint: 600,
        settings: {
        slidesToShow: 3
        }
    }, {
        breakpoint: 480,
        settings: {
        slidesToShow: 2
        }
    }]
    });
</script>
<script>
    $('.trending-new-slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    vertical: true,
    prevArrow: '.slick-prev',
    nextArrow: '.slick-next',
    });
</script>
