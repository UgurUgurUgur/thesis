@extends('layouts\app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ld-6 offset-md3">
                
                <section class="vh-100 gradient-custom">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                          <div class="card bg-dark text-white mb-5" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                  
                              <div class="mb-md-5 mt-md-4 pb-5 ">
                                <h2>Register</h2>
                                
                            
                  
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fName">First name</label>
                                        <input type="text" id="name" class="form-control form-control-sm" />
                                      </div> 

                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="lName">Last name</label>
                                        <input type="text" id="name" class="form-control form-control-sm" />
                                      </div> 
            
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" class="form-control form-control-md" />
                                        
                                      </div> 
            
                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-md" />
                                        
                                      </div>
            
                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="passwordConf">Confirm Password</label>
                                        <input type="password" id="passwordConfirm" class="form-control form-control-md" />
                                        
                                      </div> 
            
                                      <button type="button" class="btn btn-secondary btn-lg">Register</button>
                                </form>
                  
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                  
                            
                  
                    
                    <div class="mb-1">
                        <p>Already have an account? <a href="/login" class=" fw-bold">Login</a>
                        </p>
                    </div>
            </div>
                </div>


    </div>
@endsection
