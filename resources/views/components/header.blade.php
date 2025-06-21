<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="welcome" class="logo d-flex align-items-center me-auto">
      <img src="img/pickitup-logo.png" alt="pickitup logo">
      <h1 class="sitename">PickItUp</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="#about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="/service" class="{{ request()->is('service') ? 'active' : '' }}">Services</a></li>
        <li><a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">DashBoard</a></li>
        <li><a href="/team" class="{{ request()->is('team') ? 'active' : '' }}">Team</a></li>
        <li class="dropdown"><a href="#"><span>Pilihan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Materi Gitar</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul> --}}
            </li>
            <li><a href="#">Katalog Chord Dasar</a></li>
            <li><a href="#">Video Tutorial</a></li>
            <li><a href="#">Latihan Interaktif</a></li>
          </ul>
        </li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
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