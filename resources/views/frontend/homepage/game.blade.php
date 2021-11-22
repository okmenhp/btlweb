<div class="news">
    <div class="container news-container">
        <div class="row m-0 d-flex justify-content-between">
            <div class="col-md-7">
                <div class="row">
                    <div class="col heading">
                        <span>Game mới</span>
                    </div>
                </div>
                <div class="row">
                    @foreach ($games as $game)
                        <div class="col-md-6 card-news">
                            <a href="">
                                <img src="{!! asset('uploads/games/'.$game->photo_url) !!}" alt="">
                            </a>
                            <div class="tag">
                                <a href="">{!! $game->name !!}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">                    
                <div class="row">
                    @include('frontend.homepage.ads')
                </div>
            </div>
        </div>
    </div>
</div>