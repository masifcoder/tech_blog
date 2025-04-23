@extends("dashboard.dashboardlayout")



@section("main")
{{-- Success Message --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h1>All Categories</h1>
    <a class="btn btn-sm btn-warning mb-3" href="{{ route("cats.create") }}">Create Category</a>
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cats as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning me-1">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger me-1">Delete</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No categories found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection