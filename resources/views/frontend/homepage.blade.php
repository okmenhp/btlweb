<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-top-area d-lg-block">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <li>FOLLOW</li>
                        </ul>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
            <div class="logo d-flex justify-content-center">
                <img src="{{ asset('assets/images/h6_logo.png') }}" alt="Logo">
            </div>
            <div class="header-bottom-area">
                <div class="row">
                    <div class="col-md-6 pt-4 pb-4">
                        <ul class="left">
                            <li>TRANG CHỦ</li>
                            <li>GIỚI THIỆU</li>
                            <li>TIN TỨC</li>
                            <li>SỰ KIỆN</li>
                        </ul>
                    </div>
                    <div class="col-md-6 pt-4 pb-4">
                        <ul class="right">
                            <li>VIDEO</li>
                            <li>THƯ VIỆN</li>
                            <li>HỖ TRỢ</li>
                            <li>LIÊN HỆ</li>
                            <li><i class="fa fa-search"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h2>TIN TỨC</h2>
                        <h3>MỚI NHẤT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
{{-- <script>
    $(document).ready(function(){ 
        $('.single-item').slick({
        autoplay:true,
        autoplaySpeed:1500,
        infinite: true,
        // dots:true,
        arrows: true,
        })
    });
</script> --}}
</html>