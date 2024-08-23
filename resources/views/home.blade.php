@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    @if (Auth::user()->role === 'admin')
                        <div class="alert alert-info" role="alert">
                            {{ __('Welcome, Admin!') }}
                        </div>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">
                            {{ __('Go to Admin Dashboard') }}
                        </a>
                    @else
                        <div class="alert alert-info" role="alert">
                            {{ __('Welcome, User!') }}
                        </div>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">
                            {{ __('View Posts') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
