<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/"><i class="fas fa-university me-2"></i>AKADEMI RIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fas fa-home me-1"></i> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-edit me-1"></i> Entry Aplikasi
          </a>
          <ul class="dropdown-menu border-0 shadow">
            <li><a class="dropdown-item" href="/create">Entry Mahasiswa</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tampil') ? 'active' : '' }}" href="/tampil">
            <i class="fas fa-list me-1"></i> Tampil Aplikasi
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>