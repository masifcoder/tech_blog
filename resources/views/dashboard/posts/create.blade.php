@extends("dashboard.dashboardlayout");


@section("main")
 {{-- Form Start --}}
 <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Title --}}
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Content --}}
    <div class="mb-3">
        <label for="content" class="form-label">Content:</label>
        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Image --}}
    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn btn-primary">Submit Post</button>
</form>

@endsection