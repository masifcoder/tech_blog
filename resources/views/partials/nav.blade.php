<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Elegance</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/popular" class="nav-link">Popular</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
      </ul>

      @guest
        <a class="btn btn-warning btn-sm" href="/login">Login</a>
      @endguest
      
    </div>
  </div>
</nav>