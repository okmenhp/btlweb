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
   
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</head>
<body>
    <div class="header" style="background-image: url('https://themebeyond.com/html/geco/Geco/img/bg/h3_header_bg.jpg')">
        <div class="container">
            <div class="row header__follow">
                {{-- <p>FOLLOW</p> --}}
                <div class="col-md-6">
                    <div class="social-btns">
                        <a class="btn facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="btn google" href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a class="btn linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="btn instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
            <hr class="header__line">
            <div class="logo">
                <img src="https://themebeyond.com/html/geco/Geco/img/logo/h6_logo.png" alt="logo" class="logo-center">
            </div>
            <div class="row header__menu">
                <div class="col-md-6 menu__left">
                    <ul>
                        <li>TRANG CHỦ</li>
                        <li>GIỚI THIỆU</li>
                        <li>TIN TỨC</li>
                        <li>SỰ KIỆN</li>
                    </ul>
                </div>
                <div class="col-md-6 menu__right d-flex justify-content-end align-item-center">
                    <ul>
                        <li>VIDEO</li>
                        <li>HƯỚNG DẪN</li>
                        <li>HỖ TRỢ</li>
                        <li>LIÊN LẠC</li>
			            <li><i class="fa fa-search"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            {{-- <h1>TIN TỨC</h1> --}}
            <h2>TIN TỨC MỚI NHẤT</h2>
            <div class="banner-heading">
                <div class="col-md-2 d-flex flex-column justify-content-center">
                    <h5>TIN MỚI</h5>
                </div>
                <div class="col-md-10 d-flex flex-column justify-content-center">
                    <p>Cập nhật các tin tức mới nhất tại đây.</p>
                </div>
            </div>
            <div class="carousel">
                <div class="m-2">
                    <div class="card carousel-card border-0" style="background-image: url('https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/10/14/-16341882361001574419649.jpg');">
                        <div class="card-header border-0">
                            <div class="tag">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div> 
                        </div>
                        <div class="card-body d-flex flex-column-reverse">
                            <h3 class="title">HLE có thành tích kém nhất trong số 8 đội Trung - Hàn sau 3 trận vòng bảng CKTG, cộng đồng LCK chỉ ra nguyên nhân chính</h3>
                            <span>December 19, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card carousel-card border-0" style="background-image: url('https://themebeyond.com/html/geco/Geco/img/slider/banner_magazine_thumb02.jpg');">
                        <div class="card-header border-0">
                            <div class="tag">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div> 
                        </div>
                        <div class="card-body d-flex flex-column-reverse">
                            <h3 class="title">Tội ác, mất cả cuộc đời và những hiểm họa tiềm tàng cho việc cày game thâu đêm nhiều giờ, người chơi nên tránh (p2)</h3>
                            <span>December 19, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card carousel-card border-0" style="background-image: url('https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/10/14/photo-1-1634203125121351536114.jpg');">
                        <div class="card-header border-0">
                            <div class="tag">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div> 
                        </div>
                        <div class="card-body d-flex flex-column-reverse">
                            <h3 class="title">Hé lộ nguyên nhân vì sao EA sắp đóng cửa dòng game FIFA</h3>
                            <span>December 19, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card carousel-card border-0" style="background-image: url('https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/10/14/photo-1-16341893989511995487389.jpg');">
                        <div class="card-header border-0">
                            <div class="tag">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div> 
                        </div>
                        <div class="card-body d-flex flex-column-reverse">
                            <h3 class="title">Blizzard tự mình hủy hoại cái tên Diablo II huyền thoại vì thất hứa trong việc sửa lỗi bản Resurrected</h3>
                            <span>December 19, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        
    </div>
</body>
<script>
    $('.carousel').slick({
    arrows: false,
    autoplay: true,    
    autoplaySpeed: 200,
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
</html>