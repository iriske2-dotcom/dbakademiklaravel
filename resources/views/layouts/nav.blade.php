<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/dashboard"><i class="fas fa-university me-2"></i>AKADEMI RIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i class="fas fa-home me-1"></i> Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-edit me-1"></i> Entry Aplikasi
          </a>
          <ul class="dropdown-menu border-0 shadow">
            <li><a class="dropdown-item" href="/create"><i class="fas fa-plus-circle me-2 text-primary"></i>Entry Mahasiswa</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tampil') ? 'active' : '' }}" href="/tampil">
            <i class="fas fa-list me-1"></i> Tampil Aplikasi
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-white border border-light rounded-pill px-3" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow mt-2">
              <li>
                <div class="dropdown-header text-dark small text-uppercase">Manajemen Akun</div>
              </li>
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-cog me-2"></i>Pengaturan Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                {{-- Form Logout Wajib POST --}}
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger fw-bold">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>