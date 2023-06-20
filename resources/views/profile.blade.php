@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <p><strong>User ID: {{$user->id}}</strong></p>
                        <p><strong>First Name:</strong> {{ $user->fName }}</p>
                        <p><strong>Last Name:</strong> {{ $user->lName }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Created At: {{$user->created_at}}</strong></p>

                        <a href="/profileEdit" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection