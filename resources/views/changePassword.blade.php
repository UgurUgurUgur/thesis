@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('changePassword') }}">
    @csrf
    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" id="current_password"><br>

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" id="new_password"><br>

    <button type="submit">Change Password</button>
</form>

@endsection