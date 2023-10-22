<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ url('/') }}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
            Delight 2D | 3D System
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact
                </a>

              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
              </li>

              <li class="nav-item my-auto ms-3 ms-lg-0">
                <a href="{{ url('/winner_lists') }}" class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0">Winner Lists</a>
              </li>
              <li class="nav-item my-auto ms-3 ms-lg-0">

                <a href="{{ route('admin.play-twod.index') }}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Play Now</a>

              </li>
              <li class="nav-item dropdown dropdown-hover ms-2 ms-lg-0">
                <a href="{{ url('/user_profile') }}" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                  <img src="{{ asset('user_app/assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1">
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
                 <div class="d-none d-lg-block">

    @if(Auth::check()) <!-- If the user is logged in -->

        <a href="{{ route('user.UserProfile') }}" class="dropdown-item border-radius-md">
            <span class="ps-3">Profile</span>
        </a>
        
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item border-radius-md">
            {{-- <span class="sidenav-mini-icon"> L </span> --}}
            <span class="sidenav-normal ms-2 ps-1">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    @else <!-- If the user is NOT logged in -->

        <a href="{{ url('/user_register') }}" class="dropdown-item border-radius-md">
            <span class="ps-3">Register</span>
        </a>
        <a href="{{ route('login') }}" class="dropdown-item border-radius-md">
            <span class="ps-3">Log In</span>
        </a>

    @endif

</div>

                  <div class="d-lg-none mb-0">
                    <a href="../../pages/about-us.html" class="dropdown-item border-radius-md">
                      <span class="ps-3">About Us</span>
                    </a>
                    <a href="{{ url('/user_login') }}" class="dropdown-item border-radius-md">
                      <span class="ps-3">Contact Us</span>
                    </a>
                    <a href="../../pages/author.html" class="dropdown-item border-radius-md">
                      <span class="ps-3">Author</span>
                    </a>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>