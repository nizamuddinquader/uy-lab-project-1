<header>
    <div class="container-fluid header_part">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7"></div>
            <div class="col-md-3 top_right_menu text-end">
                <div class="dropdown">
                    <button class="btn dropdown-toggle top_right_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/avatar.png') }}" alt="images/avatar.png" class="img-fluid">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Manage Account</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>  
</header>