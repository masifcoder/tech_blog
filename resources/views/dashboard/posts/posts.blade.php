@extends("dashboard.dashboardlayout")



@section("main")
{{-- Success Message --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h1>Posts page</h1>
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Photo</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if($post->photo_path)
                            <img src="{{ asset('storage/' . $post->photo_path) }}" alt="Post Image" width="80">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>{{ $post->created_at->format('d M, Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning me-1">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger me-1">Delete</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No posts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection