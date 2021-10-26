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
    {{-- Banner --}}
    <div class="banner">
        <div class="container p-4"> 
            <div class="row">
                <div class="col pb-2">
                    <div class="container">
                        <div class="row banner-body pt-4 pb-4">
                            <div class="col body">
                                <a href="javascript:void(0)">Tin mới</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel">
                <div class="col carousel-card">
                    <div class="row">
                        <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/22/unnamed-163490199497760170220.png" alt="" class="img-fluid w-100">
                        <div class="tag">
                            <div class="tag-border">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="title">
                                <p>Vòng loại Tứ Kết CKTG 2021 đáng mong chờ - Những cuộc "hội ngộ" đầy duyên nợ của làng LMHT thế giới</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col carousel-card">
                    <div class="row">
                        <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/22/avata-1634890511559889272864.png" alt="" class="img-fluid w-100">
                        <div class="tag">
                            <div class="tag-border">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="title">
                                <p>Dragon Ball Super 77: Các Cerealians dùng lại tuyệt chiêu cũ của Piccolo đối phó với người Saiyan, tuy đơn giản nhưng hiệu quả</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col carousel-card">
                    <div class="row">
                        <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/22/smk-faker-4-1634890440544393356765.jpg" alt="" class="img-fluid w-100">
                        <div class="tag">
                            <div class="tag-border">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="title">
                                <p>Sau Faker, ShowMaker trở thành tuyển thủ LMHT thứ 2 được bầu chọn "top 100 người có sức ảnh hưởng nhất" tại Hàn Quốc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col carousel-card">
                    <div class="row">
                        <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/22/photo-8-1634892743655252901225.jpg" alt="" class="img-fluid w-100">
                        <div class="tag">
                            <div class="tag-border">
                                <a href="javascript:void(0)">TIN TỨC</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="title">
                                <p>Top 10 nữ chính mạnh mẽ và đầy quyến rũ trong thế giới game</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- News --}}
    <div class="trending-news">
        <div class="container trending-new-container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row pb-5">
                        <div class="col-md-3 trending-news-title">
                            <h4>Tin nổi bật</h4>
                        </div>
                        <div class="col-md-9 slick-button">
                            <div class="slick-nav mr-2">
                                <button type="button" class="slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>          
                    <div class="row">
                        <div class="col-md-6 card-left">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb01.jpg" alt="" class="card-left-image">
                            <div class="card-left-content pb-5">
                                <div class="card-tag">
                                    <a href="">SỰ KIỆN</a>    
                                </div>
                                <div class="card-left-date">
                                    <h6>December 19, 2021</h6>
                                </div>
                                <div class="card-left-title">
                                    <a href="">Mark Sniper sell House dsđsdswhere he Killed</a>
                                </div>
                            </div>                               
                        </div>
                            <div class="col-md-6">
                                <div class="trending-new-slick">
                                    <div class="row card-right d-flex">
                                        <div class="col card-right-content">
                                            <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/23/base64-1634958678815888943834.png" alt="" class="card-right-img"> 
                                            <div class="card-right-body">
                                                <div class="card-tag">
                                                    <a href="">SỰ KIỆN</a>    
                                                </div>
                                                <div class="card-right-date">
                                                    <h6>24/10/2021</h6>
                                                </div>
                                                <div class="card-right-title">
                                                    <a href="">"Trút giận" lên Cerberus Esports, Xuân Bách hé lộ nguyên nhân quan trọng trong chiến thắng của Team Flash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row card-right d-flex flex-column justify-content-space-between">
                                        <div class="col card-right-content">
                                            <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/23/base64-1634958678815888943834.png" alt="" class="card-right-img"> 
                                            <div class="card-right-body">
                                                <div class="card-tag">
                                                    <a href="">SỰ KIỆN</a>    
                                                </div>
                                                <div class="card-right-date">
                                                    <h6>24/10/2021</h6>
                                                </div>
                                                <div class="card-right-title">
                                                    <a href="">"Trút giận" lên Cerberus Esports, Xuân Bách hé lộ nguyên nhân quan trọng trong chiến thắng của Team Flash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row card-right d-flex">
                                        <div class="col card-right-content">
                                            <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/23/base64-1634958678815888943834.png" alt="" class="card-right-img"> 
                                            <div class="card-right-body">
                                                <div class="card-tag">
                                                    <a href="">SỰ KIỆN</a>    
                                                </div>
                                                <div class="card-right-date">
                                                    <h6>24/10/2021</h6>
                                                </div>
                                                <div class="card-right-title">
                                                    <a href="">"Trút giận" lên Cerberus Esports, Xuân Bách hé lộ nguyên nhân quan trọng trong chiến thắng của Team Flash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row card-right d-flex">
                                        <div class="col card-right-content">
                                            <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/23/base64-1634958678815888943834.png" alt="" class="card-right-img"> 
                                            <div class="card-right-body">
                                                <div class="card-tag">
                                                    <a href="">SỰ KIỆN</a>    
                                                </div>
                                                <div class="card-right-date">
                                                    <h6>24/10/2021</h6>
                                                </div>
                                                <div class="card-right-title">
                                                    <a href="">"Trút giận" lên Cerberus Esports, Xuân Bách hé lộ nguyên nhân quan trọng trong chiến thắng của Team Flash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row card-right d-flex">
                                        <div class="col card-right-content">
                                            <img src="https://gamek.mediacdn.vn/zoom/310_200/133514250583805952/2021/10/23/base64-1634958678815888943834.png" alt="" class="card-right-img"> 
                                            <div class="card-right-body">
                                                <div class="card-tag">
                                                    <a href="">SỰ KIỆN</a>    
                                                </div>
                                                <div class="card-right-date">
                                                    <h6>24/10/2021</h6>
                                                </div>
                                                <div class="card-right-title">
                                                    <a href="">"Trút giận" lên Cerberus Esports, Xuân Bách hé lộ nguyên nhân quan trọng trong chiến thắng của Team Flash</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="row pb-5">
                        <div class="col-md-12 trending-news-title">
                            <h4>Tin phổ biến</h4>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/popular_post_thumb01.jpg" alt="">
                            <div class="title-left pt-2">Two the night before in the NFL</div>
                        </div>
                        <div class="col-md-6">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/popular_post_thumb02.jpg" alt="">
                            <div class="title-left pt-2">Two the night before in the NFL</div>
                        </div>
                    </div>
                    <img src="https://themebeyond.com/html/geco/Geco/img/images/popular_banner.jpg" alt="" class="ads">
                </div>
            </div>
        </div>
    </div>
    {{-- Videos --}}
    <div class="video">
        <div class="container">
            <div class="row">
                <div class="row pb-5">
                    <div class="col-md-12 trending-news-title">
                        <h4>Video</h4>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-8 video-left">
                        <img src="https://gamek.mediacdn.vn/zoom/399_262/133514250583805952/2021/10/23/aliens-fireteam-elite-xenomorph-combat-moments-1-16349681618861913819984.jpg" alt="" class="thumb">
                        <a href="">
                            <img src="https://themebeyond.com/html/geco/Geco/img/icon/w_play.png" alt="" class="btn-play">
                        </a>
                    </div>
                    <div class="col-md-4 video-right">
                        <div class="row">
                            <div class="col video-right-card pb-3 pl-3">
                                <img src="https://themebeyond.com/html/geco/Geco/img/images/stream_thumb02.jpg" alt="" class="thumb">
                                <a href="">
                                    <img src="https://themebeyond.com/html/geco/Geco/img/icon/w_play.png" alt="" class="btn-play">
                                </a>
                            </div>
                            <div class="col video-right-card pb-3 pl-3">
                                <img src="https://themebeyond.com/html/geco/Geco/img/images/stream_thumb03.jpg" alt="" class="thumb">
                                <a href="">
                                    <img src="https://themebeyond.com/html/geco/Geco/img/icon/w_play.png" alt="" class="btn-play">
                                </a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Latest News --}}
    <div class="latest-news">
        <div class="container">
            <div class="row">
                <div class="row pb-5 pt-5">
                    <div class="col-md-12 trending-news-title">
                        <h4>Tin tức</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-latest-news d-flex">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb01.jpg" alt="">
                            <div class="right">
                                <div class="card-tag">
                                    <a href="">SỰ KIỆN</a>    
                                </div>
                                <div class="date">
                                    <span>DECEMBER 19, 2021</span>
                                </div>
                                <div class="title">
                                    <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                                </div>
                                <div class="content">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-latest-news d-flex">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb01.jpg" alt="">
                            <div class="right">
                                <div class="card-tag">
                                    <a href="">SỰ KIỆN</a>    
                                </div>
                                <div class="date">
                                    <span>DECEMBER 19, 2021</span>
                                </div>
                                <div class="title">
                                    <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                                </div>
                                <div class="content">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-latest-news d-flex">
                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb01.jpg" alt="">
                            <div class="right">
                                <div class="card-tag">
                                    <a href="">SỰ KIỆN</a>    
                                </div>
                                <div class="date">
                                    <span>DECEMBER 19, 2021</span>
                                </div>
                                <div class="title">
                                    <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                                </div>
                                <div class="content">
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="card-latest-news d-flex">
                        <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb01.jpg" alt="">
                        <div class="right">
                            <div class="card-tag">
                                <a href="">SỰ KIỆN</a>    
                            </div>
                            <div class="date">
                                <span>DECEMBER 19, 2021</span>
                            </div>
                            <div class="title">
                                <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                            </div>
                            <div class="content">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-latest-news d-flex">
                        <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb02.jpg" alt="">
                        <div class="right">
                            <div class="card-tag">
                                <a href="">SỰ KIỆN</a>    
                            </div>
                            <div class="date">
                                <span>DECEMBER 19, 2021</span>
                            </div>
                            <div class="title">
                                <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                            </div>
                            <div class="content">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-latest-news d-flex">
                        <img src="https://themebeyond.com/html/geco/Geco/img/blog/lgn_thumb03.jpg" alt="">
                        <div class="right">
                            <div class="card-tag">
                                <a href="">SỰ KIỆN</a>    
                            </div>
                            <div class="date">
                                <span>DECEMBER 19, 2021</span>
                            </div>
                            <div class="title">
                                <a href=""><h1>Director of nation intelligence Trump ignored</h1></a>
                            </div>
                            <div class="content">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                            </div>
                        </div>
                    </div>
               </div> --}}
               <div class="col-md-12 d-flex justify-content-center">
                   <a class="btn-more" href="">Xem thêm</a>
               </div>
               
            </div>
        </div>
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
