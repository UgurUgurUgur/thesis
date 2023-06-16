@extends('layouts\app')

@section('content')
                <section class="vh-100 gradient-custom" style="background-color: beige">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                          <div class="card bg-dark text-white mb-5" style="border-radius: 1rem;">
                            <div class="card-body text-center">
                  
                              <div class="mb-md-5 mt-md-4">
                                <h2>Register</h2>
                                
                            
                  
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fName">First name</label>
                                        <input type="text" id="name" name="fName" class="form-control form-control-sm"/>
                                      </div> 

                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="lName">Last name</label>
                                        <input type="text" id="name" name="lName" class="form-control form-control-sm" />
                                      </div> 
            
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-md" />
                                        
                                      </div> 
            
                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-md" />
                                        
                                      </div>
            
                                      <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-md" />
                                        
                                      </div> 
            
                                      <button type="submit" class="btn btn-outline-light btn-lg px-5" value="send">Register</button>
                                      
                                </form>
                                
                  
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                  
                            
                  
                    
                    <div class="mb-1">
                        <p>Already have an account? <a href="/login" class="text-white-50 fw-bold">Login</a>
                        </p>
                    </div>
            </div>
                </div>


    </div>
@endsection
