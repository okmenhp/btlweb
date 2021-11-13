<div class="sidebar">
    <div class="top mt-3 mb-5 mx-5 ">
        <h4 class="mb-0 text-light text-center text-nowrap w-100">Admin Desk</h4>
    </div>
    <div class="d-flex align-items-center pl-4 mb-1">
        <ion-icon name="home" class="icon-sidebar pr-2"></ion-icon>
        <a href="javascript:void(0)" class="">Trang chủ</a>
    </div>
    <div class="box news-box mt-3">
        <div class="d-flex align-items-center pl-4">
            <ion-icon name="newspaper" class="icon-sidebar pr-2"></ion-icon>
            <a href="javascript:void(0)" class="extend-btn">Tin tức</a>
        </div>
        <div class="box-extend news-box-extend pl-4 mt-1">
            <div class="py-2 d-flex flex-column">
                <a href="{{route('admin.articles.index')}}" class="pb-2">Tất cả bài viết</a>
                <a href="{{route('admin.articles.create')}}" class="">Bài viết mới</a>
            </div>
        </div>
    </div>
    <div class="box news-box mt-3">
        <div class="d-flex align-items-center pl-4">
            <ion-icon name="game-controller" class="icon-sidebar pr-2"></ion-icon>
            <a href="javascript:void(0)" class="extend-btn">Game</a>
        </div>
        <div class="box-extend news-box-extend pl-4 mt-1">
            <div class="py-2 d-flex flex-column">
                <a href="{{route('admin.game.index')}}" class="pb-2">Tất cả</a>
                <a href="" class="pb-2">Thêm mới</a>
                <a href="" class="">Thể loại</a>
            </div>
        </div>
    </div>
    <div class="box news-box mt-3">
        <div class="d-flex align-items-center pl-4">
            <ion-icon name="videocam" class="icon-sidebar pr-2"></ion-icon>
            <a href="javascript:void(0)" class="extend-btn">Videos</a>
        </div>
        <div class="box-extend news-box-extend pl-4 mt-1">
            <div class="py-2 d-flex flex-column">
                <a href="" class="pb-2">Tất cả</a>
                <a href="" class="pb-2">Thêm mới</a>
                <a href="" class="">Thể loại</a>
            </div>
        </div>
    </div>
</div>