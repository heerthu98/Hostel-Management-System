
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="/">uwu-Hostel</a></h1>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto {{ request()->is('#about-us') ? 'active' : '' }}" href="/#about-us">About</a></li>
          <li><a class="nav-link scrollto {{ request()->is('#hostels') ? 'active' : '' }}" href="/#hostels">Hostels</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      @if (!Auth::check())
            <a class="login-btn scrollto" href="/login">Login</a>
        @else
            <a class="login-btn scrollto" href="/logout">Logout</a>
        @endif

    </div>
  <!-- End Header -->