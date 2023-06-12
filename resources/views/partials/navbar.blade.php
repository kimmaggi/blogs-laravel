<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  data-bs-theme="dark">
    <div class="container-fluid ms-4">
      <a class="navbar-brand" href="/blog">S_Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ms-2">
            <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blogs</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link {{ Request::is('users') ? 'active' : '' }}" href="/users">Users</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Greetings, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Your Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf

                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
              <li class="nav-item ms-2">
                <a class="nav-link {{ (($title == "Login") ? 'active' : '') }}" href="/login">
                  <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
              </li>   
          @endauth
        </ul>

        
      </div>
    </div>
</nav>