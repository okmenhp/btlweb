<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner-heading">
                    <a href="{{route('article.list')}}">Tin tức</a>
                </div>
            </div>
        </div>
        <div class="slider-responsive news-slider">
            @foreach ($articles as $key => $record)
                <div class="inner">
                    <div class="col p-0" style="height: 18em">
                        <div class="tag">
                            @foreach ($tags[$key] as $tag)
                                <a href="javascript:void(0)">{{$tag}}</a>
                            @endforeach
                        </div>
                        <a href="{{route('article.detail', ['id'=>$record->id])}}">
                            <img style="height: 18em; object-fit: cover; opacity: 0.5" src="{{asset('uploads/articles/'.$record->photo_url)}}">
                        </a>
                        <div class="col news-title">
                            <a href="{{route('article.detail', ['id'=>$record->id])}}">
                                <p>{{$record->headline}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>