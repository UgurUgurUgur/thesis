<!-- resources/views/profile/edit.blade.php -->
<h1>Edit Profile</h1>

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}"><br>

    <!-- Add other fields as needed -->

    <button type="submit">Update</button>
</form>
