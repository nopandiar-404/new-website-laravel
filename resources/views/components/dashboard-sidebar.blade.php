<div id="mySidenav" class="sidenav d-flex flex-column justify-content-between">
    <div class="border-3 border-bottom py-3 px-3">
        <h5 class="text-center text-white">
            World News
            </h4>
    </div>
    <div class="h-100">
        <div class="my-2">
            <a href="/dashboard">
                <i class="fa-solid fa-gauge-high me-2"></i>
                <span class="dashboard-nav-item">
                    Dashboard
                </span>
            </a>
        </div>

        <div class="my-2">
            <div class="">
                <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample" onclick="toggleDownArrow()"
                    class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-rectangle-ad me-2"></i>
                        <span class="me-5 dashboard-nav-item">Advertisements</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-caret-down left-icon" id="down-icon"></i>
                    </div>
                </a>
            </div>
            <div class="collapse bg-secondary" id="collapseExample">
                <a href="{{ route('admin.home-advertisement') }}" class="border-bottom border-2">
                    <span class="me-5 dashboard-nav-item">Home Advertisement</span>
                </a>
                <a href="{{ route('admin.sidebar-advertisement') }}" class="border-bottom border-2">
                    <span class="me-5 dashboard-nav-item">Sidebar Advertisement</span>
                </a>
            </div>
        </div>
    </div>


    <div class="border-3 border-top py-2 px-3 d-flex align-items-center justify-content-center">
        <div class="me-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png"
                alt="" class="border rounded-circle" style="width: 50px; height: 50px;">
        </div>

        <div class="btn-group dropup">
            <div type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-white">
                    Aung Thu Zaw
                </span>
            </div>
            <ul class="dropdown-menu bg-dark text-white-50">
                <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                <li>
                    <hr class="dropdown-divider text-white">
                </li>
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <hr class="dropdown-divider text-white">
                </li>
                <li style="cursor: pointer;">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn text-white">Logout</button>
                        {{-- <input type="submit" value="Logout" class="border-0"
                            style="background-color: transparent;"> --}}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
