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
                <li class="breadcrumb-item active" aria-current="page">Video</li>
            </ol>
        </div>
            <div class="row">
                <div class="col heading">
                    <span>Tin tức</span>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $key => $article)
                    <div class="card-latest-new col-md-4">
                        <div class="row px-1">
                            <div class="col-md-12 p-0">
                                <img src="{{asset('uploads/articles/'.$article->photo_url)}}" alt="">
                            </div>
                            <div class="col-md-12 inner">
                                <div class="body row">
                                    <div class="tag col-md-12">
                                        @foreach ($tags[$key] as $tag)
                                            <a href="javascript:void(0)" class="mb-1">{{$tag}}</a>
                                        @endforeach
                                    </div>
                                    <div class="title col-md-12">
                                        <a href="{{route('article.detail', ['id'=>$article->id])}}">
                                            <p>{!!$article->headline!!}</p>
                                        </a>
                                    </div>
                                    <div class="content col-md-12">
                                        <p >
                                            {!!$article->description!!}
                                        </p>
                                    </div>
                                    <p class="date">{!! date('d-m-Y', strtotime($article->updated_at))!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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