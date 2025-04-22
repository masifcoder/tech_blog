@extends('master')


@section('content')

<!-- Cover Image -->
<img src="{{ asset("storage/". $post->photo_path) }}" alt="Cover" class="post-cover">

<!-- Post Content -->
<div class="col-md-9">
  <!-- Author -->
  <div class="author-info mb-4">
    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author">
    <div>
      <strong>{{$post->user->name}}</strong><br>
      <small class="text-muted">{{$post->created_at->format("F d, Y")}}</small>
    </div>
  </div>

  <!-- Title -->
  <h1 class="post-title mb-4">{{ $post->title }}</h1>

  <!-- Post Body -->
  <div class="post-body"> {!! $post->content !!}</div>
</div>
@endsection