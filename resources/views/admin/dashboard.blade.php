@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Users</h2>
            <p>Total Users: {{ $userCount }}</p>
        </div>
        <div class="col-md-6">
            <h2>Posts</h2>
            <p>Total Posts: {{ $postCount }}</p>
        </div>
    </div>
</div>
@endsection
