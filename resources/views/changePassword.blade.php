@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('changePassword') }}">
                        @csrf
                        <label for="current_password">Current Password:</label>
                        <input type="password" name="current_password" id="current_password"><br>
                    <br>
                        <label for="new_password">New Password:</label>
                        <input type="password" name="new_password" id="new_password"><br>
                        <br>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection