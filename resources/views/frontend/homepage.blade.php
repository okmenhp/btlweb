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
    {{-- Navbar-sticky --}}
    <nav class="navbar sticky-top navbar-hide nav-custom" id="nav-sticky">
        <div class="container p-4 d-block">
            <div class="row">
               <div class="col-md-6 menu-left">
                    <ul>
                        <li><a href="" class="active">TRANG CHỦ</a></li>
                        <li><a href="">GIỚI THIỆU</a></li>
                        <li><a href="">TIN TỨC</a></li>
                        <li><a href="">SỰ KIỆN</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <img src="https://themebeyond.com/html/geco/Geco/img/logo/h6_logo.png" alt="logo" class="logo-center">
                </div>
                <div class="col-md-6 menu-right d-flex justify-content-end align-item-center">
                    <ul>
                        <li><a href="">VIDEO</a></li>
                        <li><a href="">HƯỚNG DẪN</a></li>
                        <li><a href="">HỖ TRỢ</a></li>
                        <li><a href="">LIÊN LẠC</a></li>
			            <li>
                            <div class="btn-search"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></div>
                        </li>
                    </ul>
                </div> 
            </div>
                
        </div>
    </nav>
    {{-- Header --}}
    <div class="header">
        <div class="container">
            <div class="header-follow">
                <p class="text-follow">FOLLOW</p>
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
            <div class="logo">
                <img src="https://themebeyond.com/html/geco/Geco/img/logo/h6_logo.png" alt="logo" class="logo-center">
            </div>
            <div class="row header-menu ">
                <div class="col-md-6 menu-left">
                    <ul>
                        <li><a href="" class="active">TRANG CHỦ</a></li>
                        <li><a href="">GIỚI THIỆU</a></li>
                        <li><a href="">TIN TỨC</a></li>
                        <li><a href="">SỰ KIỆN</a></li>
                    </ul>
                </div>
                <div class="col-md-6 menu-right d-flex justify-content-end align-item-center">
                    <ul>
                        <li><a href="">VIDEO</a></li>
                        <li><a href="">HƯỚNG DẪN</a></li>
                        <li><a href="">HỖ TRỢ</a></li>
                        <li><a href="">LIÊN LẠC</a></li>
			            <li>
                            <div class="btn-search"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="search-data">
               <input type="text" required>
               <div class="line"></div>
               <label>Type to search..</label>
               <span class="fa fa-search"></span>
            </div>
         </div>
    </div>
    {{-- Banner --}}
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
                        <div class="col-md-6 card-left" style="background-image: url('https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb01.jpg');">
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
                                    <div class="row card-right d-flex p-2">
                                        <div class="col-md-4">
                                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb03.jpg" alt="">
                                        </div>
                                        <div class="card-right-content col-md-8">
                                            <div class="card-tag">
                                                <a href="">SỰ KIỆN</a>    
                                            </div>
                                            <div class="card-right-date">
                                                <h6>December 19, 2021</h6>
                                            </div>
                                            <div class="card-right-title">
                                                <a href="">Mark Sniper sell House where he Killed</a>
                                            </div>
                                        </div>                               
                                    </div>
                                    <div class="row card-right d-flex p-2">
                                        <div class="col-md-4">
                                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb02.jpg" alt="">
                                        </div>
                                        <div class="card-right-content col-md-8">
                                            <div class="card-tag">
                                                <a href="">SỰ KIỆN</a>    
                                            </div>
                                            <div class="card-right-date">
                                                <h6>December 19, 2021</h6>
                                            </div>
                                            <div class="card-right-title">
                                                <a href="">Mark Sniper sell House where he Killed</a>
                                            </div>
                                        </div>                               
                                    </div>
                                    <div class="row card-right d-flex p-2">
                                        <div class="col-md-4">
                                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb04.jpg" alt="">
                                        </div>
                                        <div class="card-right-content col-md-8">
                                            <div class="card-tag">
                                                <a href="">SỰ KIỆN</a>    
                                            </div>
                                            <div class="card-right-date">
                                                <h6>December 19, 2021</h6>
                                            </div>
                                            <div class="card-right-title">
                                                <a href="">Mark Sniper sell House where he Killed</a>
                                            </div>
                                        </div>                               
                                    </div>
                                    <div class="row card-right d-flex p-2">
                                        <div class="col-md-4">
                                            <img src="https://themebeyond.com/html/geco/Geco/img/blog/trand_news_thumb04.jpg" alt="">
                                        </div>
                                        <div class="card-right-content col-md-8">
                                            <div class="card-tag">
                                                <a href="">SỰ KIỆN</a>    
                                            </div>
                                            <div class="card-right-date">
                                                <h6>December 19, 2021</h6>
                                            </div>
                                            <div class="card-right-title">
                                                <a href="">Mark Sniper sell House where he Killed</a>
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
                        <img src="https://themebeyond.com/html/geco/Geco/img/images/stream_thumb01.jpg" alt="">
                    </div>
                    <div class="col-md-4 video-right">
                        <div class="row">
                            <div class="video-right-card pb-3">
                            <img src="https://themebeyond.com/html/geco/Geco/img/images/stream_thumb02.jpg" alt="">
                        </div>
                        <div class="video-right-card pb-3">
                            <img src="https://themebeyond.com/html/geco/Geco/img/images/stream_thumb03.jpg" alt="">
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
                <div class="col-md-12">
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
               </div>
               <div class="col-md-12 d-flex justify-content-center">
                   <a class="btn-more" href="">Xem thêm</a>
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
    // verticalSwiping: true,
    prevArrow: '.slick-prev',
    nextArrow: '.slick-next',

    });
	
</script>
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#nav-sticky').removeClass('navbar-hide');
        } 
        else{
            $('#nav-sticky').addClass('navbar-hide');
        }
    });

</script>
<script>
    $(".btn-search").click(function(){
      $(".wrapper").addClass("active");
    //   $(this).css("display", "none");
      $(".search-data").fadeIn(500);
      $(".close-btn").fadeIn(500);
      $(".search-data .line").addClass("active");
      setTimeout(function(){
        $("input").focus();
        $(".search-data label").fadeIn(500);
        $(".search-data span").fadeIn(500);
      }, 800);
    });
    
    $(".wrapper").click(function(){
      $(".wrapper").removeClass("active");
      $(".search-btn").fadeIn(800);
      $(".search-data").fadeOut(500);
      $(".search-data .line").removeClass("active");
      $("input").val("");
      $(".search-data label").fadeOut(500);
      $(".search-data span").fadeOut(500);
    });
 </script>
 <script>
     $(".btn-search").click(function(){
        disableScroll();
     });
     $(".wrapper").click(function(){
        enableScroll();
     });

    // left: 37, up: 38, right: 39, down: 40,
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    var keys = {37: 1, 38: 1, 39: 1, 40: 1};

    function preventDefault(e) {
    e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    // modern Chrome requires { passive: false } when adding event
    var supportsPassive = false;
    try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; } 
    }));
    } catch(e) {}

    var wheelOpt = supportsPassive ? { passive: false } : false;
    var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    // call this to Enable
    function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }
 </script>
</html>