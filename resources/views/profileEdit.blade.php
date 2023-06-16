<!-- resources/views/profile/edit.blade.php -->
<h1>Edit Profile</h1>

<form method="POST" action="{{ route('profileEdit') }}">
    @csrf
    <label for="fName">First Name:</label>
    <input type="text" name="fName" id="fName" value="{{ $user->fName }}"><br>
    <label for="LName">Last Name:</label>
    <input type="text" name="lName" id="lName" value="{{ $user->lName }}"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}"><br>

    <!-- Add other fields as needed -->

    <button type="submit">Update</button>
</form>
