@include('layouts.navbar')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Jost:wght@300;400&display=swap" rel="stylesheet">

<nav class="nav-wrap">
  <div class="nav-inner">
    <a href="{{ url('/') }}" class="brand">
      <svg class="brand-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 3C9 3 7 5 7 8c0 4 3 6 5 9 2-3 5-5 5-9 0-3-2-5-5-5z" fill="#8A9E7B" opacity="0.9"/>
        <path d="M12 3C12 3 10 6 10 9s2 4 2 4 2-1 2-4-2-6-2-6z" fill="#6B8A5E"/>
        <path d="M12 8c0 0-3-1-5 2" stroke="#8A9E7B" stroke-width="0.8" opacity="0.5"/>
        <path d="M12 8c0 0 3-1 5 2" stroke="#8A9E7B" stroke-width="0.8" opacity="0.5"/>
      </svg>
      <span class="brand-main">Essenzebell</span>
    </a>

    <ul class="nav-links">
      <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
      <li><a href="{{ route('catalogo') }}" class="{{ request()->is('catalogo*') ? 'active' : '' }}">Catálogo</a></li>
      <li><a href="{{ route('ubicacion') }}" class="{{ request()->is('ubicacion*') ? 'active' : '' }}">Dónde estamos</a></li>
    </ul>

    <button class="hamburger" id="ham" aria-label="Menú" onclick="toggleMenu()">
      <span id="h1"></span>
      <span id="h2"></span>
      <span id="h3"></span>
    </button>
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a>
  <a href="{{ route('catalogo') }}" class="{{ request()->is('catalogo*') ? 'active' : '' }}">Catálogo</a>
  <a href="{{ route('ubicacion') }}" class="{{ request()->is('ubicacion*') ? 'active' : '' }}">Dónde estamos</a>
</div>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    const h1 = document.getElementById('h1');
    const h2 = document.getElementById('h2');
    const h3 = document.getElementById('h3');
    const isOpen = menu.classList.toggle('open');
    h1.style.transform = isOpen ? 'rotate(45deg) translate(4px, 4px)' : '';
    h2.style.opacity = isOpen ? '0' : '';
    h3.style.transform = isOpen ? 'rotate(-45deg) translate(4px, -4px)' : '';
  }
</script>