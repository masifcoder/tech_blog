
@extends('master')


@section('content')

<div class="col-md-9">
    <h2 class="mb-4">📝 Latest Articles</h2>
    <div class="row g-4">
      @foreach ($posts as $post)
        <div class="col-md-6">
          <div class="post-card p-0">
            <img src="{{ asset("storage/". $post->photo_path) }}" class="w-100" alt="Creative Thinking">
            <div class="p-3">
              <a href="{{ route("blog.single", $post->id) }}">
                <h5>{{ $post->title }}</h5>
              </a>
              <p class="text-muted">by {{$post->user->name}} - {{$post->created_at->diffForHumans()}}</p>
              <p class="mb-0">{{ $post->excerpt }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection