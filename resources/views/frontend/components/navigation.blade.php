<nav>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar">
            <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
                <img src="{{asset('uploads/vimaru2.png')}}" style="width: 2.5em; height: 2.5em" alt="">
                <h4 class="ml-2 mb-0">Website giới thiệu game</h4>
            </a>
            <button class="navbar-toggler p-0 m-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div id="nav-icon0">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link" href="{{route('game.list')}}">GAME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('video.list')}}">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('article.list')}}">TIN TỨC</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</nav>