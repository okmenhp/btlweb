<div class="header d-flex justify-content-end align-items-center py-2 pr-5">
    <img class="user-img mr-1" src="{{asset('assets/images/admin/user.png')}}" alt="user">
    <h4 class="user-name mb-0">admin1</h4>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        <button type="submit" class="bg-white border-0 ml-3 text-danger">Đăng xuất</button>
        @csrf
    </form>
</div>