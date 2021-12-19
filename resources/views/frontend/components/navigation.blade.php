<nav>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar">
            <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
                <img src="{{asset('uploads/vimaru2.png')}}" style="width: 2.5em; height: 2.5em" alt="">
                <h4 class="ml-2 mb-0">Game review</h4>
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
                <form action="{{route('game.search')}}" method="post" class="mb-0 ml-4 border-bottom">
                    @csrf
                    <input type="text" name="search_result" class="border-0" style="outline: none" placeholder="tìm kiếm game">
                    <button type="submit" class="bg-white border-0">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>
            </div>
            <div class="ml-4 d-flex">
                @if(Auth::user())
                    <p class="mb-0">{{Auth::user()->name}}</p>
                    <form class="mb-0" action="{{route('logout', ['page'=>'member'])}}" method="post">
                        @csrf
                        <button type="submit" class="border-0 px-0 py-0 bg-transparent">
                            <p class="mb-0 pl-2 ml-2 border-left border-dark">Đăng xuất</p>
                        </button>
                    </form>
                @else
                    <a href="{{route('login', ['page'=>'member'])}}">Đăng nhập</a>
                @endif
            </div>
        </nav>
    </div>
</nav>