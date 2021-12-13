<div class="latest-news">
    <div class="container latest-news-container">
        <div class="row m-0">
            <div class="col">
                <div class="row">
                    <div class="col heading">
                        <span>Tin tức</span>
                    </div>
                </div>
                <div class="row p-1">
                    @foreach ($articles as $key => $article)
                        <div class="card-latest-new">
                            <div class="col-md-5 p-0">
                                <img style="object-fit: cover" src="{{asset('uploads/articles/'.$article->photo_url)}}" alt="">
                            </div>
                            <div class="col-md-7 inner">
                                <div class="body d-flex flex-column justify-content-between h-100">
                                    <div class="">
                                        <div class="tag">
                                            @foreach ($tags[$key] as $tag)
                                                <a href="javascript:void(0)">{{$tag}}</a>
                                            @endforeach
                                        </div>
                                        <div class="title">
                                            <a href="{{route('article.detail', ['id'=>$article->id])}}">
                                                <p>{!! $article->headline !!}</p>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p>{!! $article->description !!}</p>
                                        </div>
                                    </div>
                                    <p class="date mb-0">{!! date('d-m-Y', strtotime($article->publish_date)) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row button-view-more">
            <a href="{{route('article.list')}}" class="btn-more">Xem thêm</a>
        </div>
        
    </div>
</div>