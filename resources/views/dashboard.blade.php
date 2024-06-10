@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- Aggiungi i collegamenti qui -->
                    <div class="mt-4">
                        <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">View Projects</a>
                        <a href="{{ route('profile.edit') }}" class="btn btn-info">Update Profile</a>
                        <form action="{{ route('profile.destroy') }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
                        </form>
                    </div>
                    <!-- Fine collegamenti -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

