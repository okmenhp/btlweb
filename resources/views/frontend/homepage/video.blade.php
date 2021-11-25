<div class="video">
    <div class="container">
        <div class="row m-0">
            <div class="col">
                <div class="row">
                    <div class="col heading">
                        <span>Video</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 p-1">
                        <div class="videos">
                            <a class="play" video-url="{!! $video_first->source !!}">
                                <i class="fa fa-play-circle"></i>
                            </a>
                            
                            <div class="videos-body">
                                <img src="{{ asset('uploads/videos/'.$video_first->photo_url) }}" alt="img" />
                                <a class="title">{!! $video_first->title !!}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @foreach ($videos as $video)
                            <div class="row video-secondary">
                                <div class="videos p-1">
                                    <a class="play" video-url="{!! $video->source !!}">
                                        <i class="fa fa-play-circle"></i>
                                    </a>
                                    <a class="title">{!! $video->title !!}</a>
                                    <img src="{{asset('uploads/videos/'.$video->photo_url)}}" alt="img" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>