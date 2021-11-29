<div class="col-md-auto sidebar">
    <div class="logo_content text-center pt-2 pb-2">
        <a class="navbar-brand" href="/">ZETABIT</a>
    </div>
    <ul class="side_list p-0">
        <li>
            <a href="#">
                <i class="bx bx-grid-alt" ></i>
                <span class="links_name">Dashboard</span>
            </a>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li>
            <a href="#">
                <i class='bx bx-package' ></i>
                <span class="links_name">Produk</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user' ></i>
                <span class="links_name">User</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-chat' ></i>
                <span class="links_name">Messages</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-check-square' ></i>
                <span class="links_name">Request</span>
            </a>
        </li>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="{{ asset('frontend/image/hermonie.jpg') }}" alt="">
                    <div class="name_job">
                        <p class="name">{{ Auth::user()->name }}</p>
                        <div class="job">Admin</div>
                    </div>
                </div>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a class='bx bx-log-out text-decoration-none' style="color: white" id="log_out" href="{{route('logout')}}"
                onclick="this.closest('form').submit();"></a>
                </form> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="bx bx-log-out" id="log_out" style="color: white" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                  </a>
                </form>
            </div>
        </div>
    </ul>
</div>