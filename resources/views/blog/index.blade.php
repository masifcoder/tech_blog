
@extends('master')


@section('content')

<div class="col-md-9">
    <h2 class="mb-4">📝 Latest Articles</h2>
    <div class="row g-4">

      <div class="col-md-6">
        <div class="post-card p-0">
          <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?auto=format&fit=crop&w=800&q=80" class="w-100" alt="Nature">
          <div class="p-3">
            <a href="/post"><h5>Exploring Nature for Mental Peace</h5></a>
            <p class="text-muted">by Sarah Lee</p>
            <p class="mb-0">Discover how spending time in nature can improve your mental health and creativity.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="post-card p-0">
          <img src="https://images.unsplash.com/photo-1581090700227-1e8f2870da51?auto=format&fit=crop&w=800&q=80" class="w-100" alt="Coding">
          <div class="p-3">
            <h5>How I Became a Developer Without a Degree</h5>
            <p class="text-muted">by Alex Johnson</p>
            <p class="mb-0">My unconventional path to becoming a full-stack developer using free resources.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="post-card p-0">
          <img src="https://images.unsplash.com/photo-1581090700227-1e8f2870da51?auto=format&fit=crop&w=800&q=80" class="w-100" alt="Startup">
          <div class="p-3">
            <h5>Launching a Startup in 30 Days</h5>
            <p class="text-muted">by Nina Patel</p>
            <p class="mb-0">An inside look at building and launching a SaaS product in one month.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="post-card p-0">
          <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" class="w-100" alt="Creative Thinking">
          <div class="p-3">
            <h5>Creative Thinking for Better Decisions</h5>
            <p class="text-muted">by Oscar Lin</p>
            <p class="mb-0">Learn how design thinking can help solve complex challenges creatively and effectively.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection