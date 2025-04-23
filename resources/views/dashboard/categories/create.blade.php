@extends('dashboard.dashboardlayout')


@section('main')
<form id="createForm" action="{{ route('cats.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Title --}}
    <div class="mb-3">
        <label for="name" class="form-label">Category Name:</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn btn-primary">Create Category</button>
</form>

@endsection