<nav class="navbar navbar-expand-lg navbar-dark" style="background:#1C1C1A; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
      <span style="font-family: Georgia, serif; font-weight: 300; letter-spacing: 0.08em;">🌿 EssenzeBell</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-1">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('catalogo*') ? 'active' : '' }}" href="{{ url('/catalogo') }}">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('ubicacion*') ? 'active' : '' }}" href="{{ url('/ubicacion') }}">Dónde estamos</a>
        </li>
      </ul>
    </div>

  </div>
</nav>