<header>
    <nav id="desktop-nav">
        {{-- <div class="logo">Ilyas Budi</div> --}}
        <div>
          <ul class="text-black nav-links">
            <li><a href="/#about">About</a></li>
            <li><a href="/#experience">Experience</a></li>
            <li><a href="/#projects">Projects</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li><a href="blogs">Blogs</a></li>
          </ul>
        </div>
      </nav>
      <nav id="hamburger-nav">
        {{-- <div class="logo">Ilyas Budi</div> --}}
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu();">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="text-black menu-links">
            <li><a href="/#about" onclick="toggleMenu()">About</a></li>
            <li><a href="/#experience" onclick="toggleMenu()">Experience</a></li>
            <li><a href="/#projects" onclick="toggleMenu()">Projects</a></li>
            <li><a href="/#contact" onclick="toggleMenu()">Contact</a></li>
            <li><a href="Blogs" onclick="toggleMenu()">Blogs</a></li>
          </div>
        </div>
      </nav>
    <aside class="social-icons">
        <a href="https://www.facebook.com/ilyasbudi.jati">
            <img src="{{ asset('css/facebook.png') }}">
        </a>
        <a href="https://www.instagram.com/hyuu.j_">
            <img src="{{ asset('css/instagram.png') }}">
        </a>
        <a href="https://t.me/ilyass_11">
            <img src="{{ asset('css/telegram.png') }}">
        </a>
    </aside>
</header>
