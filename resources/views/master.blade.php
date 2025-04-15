<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Elegance - Medium Inspired</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset("css/styles.css") }}">
</head>
<body>

  @include("partials/nav");

<!-- Hero Section -->
@if(request()->routeIs('blog.index'))
<section class="hero text-center">
  <div class="container">
    <h1>Stories that matter</h1>
    <p class="lead">Read insightful articles by authors from around the world.</p>
  </div>
</section>
@endif

@if(request()->routeIs('blog.index'))
  @include("partials/popular")
@endif


<!-- Articles Section with Sidebar -->
<div class="container my-5">
  <div class="row g-4">

    <!-- Blog Posts -->
    @yield('content')

    @include("partials/sidebar")

  </div>
</div>


<!-- Footer -->
<footer class="text-center py-4 mt-5 border-top">
  <p class="mb-0">&copy; 2025 Elegance. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
