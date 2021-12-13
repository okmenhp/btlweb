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
                <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
        </div>
        <div class="post-detail pt-5 pb-5 d-flex">
            <div class="col-md-8">
                <div class="container detail">
                    <div class="col title">
                        <h1>{{$article->headline}}</h1>
                    </div>
                    <div class="col time">
                        <h4>{!! date('d-m-Y', strtotime($article->updated_at))!!}</h4>
                    </div>
                    <hr>
                    <div class="col content mb-3">
                        {!!$article->description!!}
                        <img src="{{asset('uploads/articles/'.$article->photo_url)}}" class="mt-3" alt="">
                    </div>
                    <div class="col content">
                        {!!$article->text!!}
                    </div>
                    <hr>
                    <div class="col content">
                        <h6>Nguồn: <a href="{!!$article->source!!}">{!!$article->source!!}</a> </h6>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-1">
                <div class="container">
                    <div class="title-right">
                        <h3>Tin tức khác</h3>
                    </div>
                    <hr>
                    <div class="row news-right">
                        @foreach ($other_articles as $record)
                            <div class="col d-flex pb-1">
                                <div style="width:12rem; height:6.5rem">
                                    <img src="{{asset('uploads/articles/'.$record->photo_url)}}" alt="" style="object-fit:cover;width:12rem; height:6.5rem">
                                </div>
                                <div class="body pl-2">
                                    <div class="title">
                                        <a href="">{{$record->headline}}</a>
                                    </div>
                                    <div class="date"><p>{!! date('d-m-Y', strtotime($article->updated_at))!!}</p></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Footer -->
    @include('frontend.components.footer')
    <!-- End Footer -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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