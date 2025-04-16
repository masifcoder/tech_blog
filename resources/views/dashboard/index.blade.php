<h1>Dashboard</h1>

<form method="POST" action="{{ route("logout") }}">
    @csrf
    <button>Logout</button>
</form>