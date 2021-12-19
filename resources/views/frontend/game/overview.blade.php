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
                    <h5 class="border-0">Nhận xét</h5>
                    @if(Auth::user() != null)
                        <div class="mb-2">
                            <input type="text" id="comment" data-id="{{$game->id}}" name="comment" placeholder="Nhận xét của bạn..." class="w-100 py-1 px-1" style="border-color: #bcee0e">
                            <p class="text-danger alert-comment hidden mb-0">Vui lòng nhập nhận xét của bạn!</p>
                            <button type="submit" id="send-cmt" class="mt-1 text-light px-2" style="background: #31582a; border-color: #bcee0e">Gửi</button>
                        </div>
                    @else
                        <div class="mb-2">
                            <a href="{{route('login', ['page'=>'game'])}}">
                                <h6>Đăng nhập để thêm nhận xét</h6>
                            </a>
                        </div>
                    @endif
                    <div class="comment-area" style="max-height: 25em; overflow-y: scroll">
                        @foreach ($comments as $comment)
                            <div class="border px-2 py-1 mb-2">
                                <p class="mb-2" style="color: #bcee0e">{{$comment['member_name']}}</p>
                                <h6>{{$comment['content']}}</h6>
                            </div>
                        @endforeach
                    </div>
                    
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

<script>
    $(document).ready(function() {
        $('#nav-icon0,#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function() {
            $(this).toggleClass('open');
        });
    });

    $('#send-cmt').click(function(){
        let id = $('#comment').data('id');
        let comment = $('#comment').val();
        if(comment != ""){
            $.ajax({
                url: '{{route('game.comment')}}',
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                    comment: comment
                },
                success: function(res){
                    $('#comment').val('')
                    $('.comment-area').prepend('<div class="border px-2 py-1 mb-2">'+
                                                    '<p class="mb-2" style="color: #bcee0e">'+res.name+'</p>'+
                                                    '<h6>'+res.comment+'</h6>'+
                                                '</div>')
                }
            })
        }else{
            $('.alert-comment').toggleClass('hidden');
        }
        
    })
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