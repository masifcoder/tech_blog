@extends('dashboard.dashboardlayout')



@section('main')

<h3 class="mb-4">Welcome back, {{ auth()->user()->name }}👋</h3>
<div class="row g-4">
  <div class="col-md-4">
    <div class="dashboard-box text-center">
      <div class="dashboard-title">Total Posts</div>
      <div class="dashboard-number">820</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="dashboard-box text-center">
      <div class="dashboard-title">Pages</div>
      <div class="dashboard-number">920</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="dashboard-box text-center">
      <div class="dashboard-title">Comments</div>
      <div class="dashboard-number">920</div>
    </div>
  </div>
</div>
@endsection
