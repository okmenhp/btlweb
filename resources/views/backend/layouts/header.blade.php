<div class="header d-flex justify-content-end align-items-center py-2 pr-5">
    <img class="user-img mr-1" src="{{asset('assets/images/admin/user.png')}}" alt="user">
    <h4 class="user-name mb-0">{{Auth::user()->name}}</h4>
    <form id="logout-form" action="{{ route('logout', ['page'=>'admin']) }}" method="POST">
        <button type="submit" class="bg-white border-0 ml-3 text-danger">Đăng xuất</button>
        @csrf
    </form>
</div>