<!-- aboutus.blade.php -->

@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title text-center">About Us</h1>
            <hr>

            <div class="row">
              <div class="col-md-6">
                <img src="path/to/image.jpg" class="img-fluid mb-4" alt="Image">
                <h3 class="card-subtitle mb-2">Our Mission</h3>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut turpis felis. In ut lorem ac nisl dignissim congue.</p>
              </div>

              <div class="col-md-6">
                <h3 class="card-subtitle mb-2">Our Team</h3>
                <ul class="list-group">
                  <li class="list-group-item">John Doe - CEO</li>
                  <li class="list-group-item">Jane Smith - CTO</li>
                  <li class="list-group-item">Mark Johnson - Developer</li>
                  <li class="list-group-item">Emily Williams - Designer</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
