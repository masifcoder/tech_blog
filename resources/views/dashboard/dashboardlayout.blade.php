<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   @stack('styles')
  <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
</head>
<body>
  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-4">
        <a class="navbar-brand fw-bold mb-3" href="/">Elegance</a>
        <nav class="nav flex-column">
          <a class="nav-link active" href="{{ route("dashboard.index") }}">Dashboard</a>
          <a class="nav-link" href="{{ route("posts.index") }}">Blog Posts</a>
          <a class="nav-link" href="{{ route("post.create") }}">Create Post</a>
          
          @if (auth()->user()->role == 'admin')
            <a class="nav-link" href="{{ route("cats.index") }}">Categories</a>
          @endif

          <a class="nav-link" href="#">Comments</a>
          <a class="nav-link" href="{{ route("dashbaord.settings") }}">Settings</a>
          <form method="POST" action="{{ route("logout") }}">
            @csrf
            <button class="nav-link text-danger mt-auto">Logout</button>
        </form>
        </nav>
        <div class="mt-5 p-3 rounded bg-light text-center">
          <p class="mb-2">Want to write something?</p>
          <a href="#" class="btn btn-primary btn-sm">+ New Draft</a>
        </div>
      </div>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 py-4 px-5">
            @yield('main')
      </main>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts');
</body>
</html>
