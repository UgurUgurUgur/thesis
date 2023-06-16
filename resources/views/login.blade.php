@extends('layouts\app')
<section class="vh-100 gradient-custom" style="background-color: beige">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                
                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-md" />
                  
                </div> 
  
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-md" />
                  
                </div>
  
                
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </form>
              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
  
              </div>
  
              <div>
                <p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>