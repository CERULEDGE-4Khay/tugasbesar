<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="welcome" class="logo d-flex align-items-center me-auto">
      <img src="img/pickitup-logo.png" alt="pickitup logo">
      <h1 class="sitename">PickItUp</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="/service">Services</a></li>
        <li><a href="/dashboard">DashBoard</a></li>
        <li><a href="#team">Team</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    @guest
      <a class="cta-btn" href="/login">Login</a>
      <a class="cta-btn" href="/register">Register</a>
    @else
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn cta-btn" type="submit">Logout</button>
      </form>
    @endguest
  </div>
</header>