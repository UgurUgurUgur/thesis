@include('includes.music')
<div class="top-right">
    <a href="{{ route('home') }}" class="nav-button"><i class="fa-solid fa-house"></i>Home</a>
    <a href="{{ route('todo') }}" class="nav-button"><i class="fa-solid fa-list-check"></i>My Tasks</a>
    <a href="{{ route('about-us') }}" class="nav-button"><i class="fa-solid fa-circle-info"></i>About Us</a>
</div>

<div class="top-left">
    <a href="#" class="nav-button"><i class="fa-solid fa-user"></i>Profile</a>
    <a href="{{ route('logout') }}" class="nav-button"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
</div>
