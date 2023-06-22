<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
      body {
        background: #7e40f6;
        background: -webkit-linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
        background: linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
      }
    </style>
  </head>
  @extends('layouts.app')
@include('includes.navigation')
@section('content')
  <section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col text-center">
          <h1 class="display-4 text-black glowing-header">About Us</h1>
          <p class="lead text-black mb-5">Welcome to our task management program.</p>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <h2 class="text-black">Program Purpose and Features</h2>
              <p class="text-black">Our program aims to help people keep track of their tasks and jobs more efficiently. With our user-
                friendly interface, users can easily add tasks and set priorities to manage their workload effectively. The program 
                provides the following features:</p>
              <ul class="text-black">
                <li>Task creation and management</li>
                <li>Priority assignment for tasks</li>
                <li>Progress tracking and badges for achievements</li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <h2 class="text-black">The Project</h2>
              <p class="text-black">TaskTrackerPro, our task management program, was developed as part of our thesis project for school. 
                It showcases our skills and knowledge in software development and project management. We are proud to present this 
                program as a solution to enhance productivity and task organization.</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <h2 class="text-black">Developers</h2>
              <div class="d-flex justify-content-between">
                <div class="text-center">
                  <img src="{{ asset('images/ugur.png') }}" alt="Karaca Ugurkan" class="rounded-circle developer-img">
                  <h4 class="text-black">Karaca Ugurkan</h4>
                  <p class="text-black">AKA PyjamaPrince</p>
                  <div>
                    <a href="https://github.com/UgurUgurUgur" target="_blank" class="btn btn-primary"><i class="fa-brands fa-github fa-beat"></i></a>
                    <a href="https://www.linkedin.com/in/ugurkan-karaca-8552b3267/" target="_blank" class="btn btn-primary"><i class="fa-brands fa-linkedin fa-beat"></i></a>
                  </div>
                </div>
                <div class="text-center">
                  <img src="{{ asset('images/milan.png') }}" alt="Rubbens Milan" class="rounded-circle developer-img">
                  <h4 class="text-black">Rubbens Milan</h4>
                  <p class="text-black">AKA Milan2</p>
                  <div>
                    <a href="https://github.com/MilanRubbens" target="_blank" class="btn btn-primary"><i class="fa-brands fa-github fa-beat"></i></a>
                    <a href="https://www.linkedin.com/in/milan-rubbens-297a6026a/" target="_blank" class="btn btn-primary"><i class="fa-brands fa-linkedin fa-beat"></i></a>
                  </div>
                </div>                
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <h2 class="text-black">Lessons Learned</h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <div class="text-center">
                <div class="developer-container">
                  <div class="developer-image">
                    <img src="{{ asset('images/milan.png') }}" alt="Rubbens Milan" class="rounded-circle developer-img">
                  </div>
                  <div class="speech-box-right">
                    <p><span class="highlight">"In this backend project, I've grown immensely. Creating an intuitive task tracking platform with motivating badges 
                      taught me the value of the right tools. Overcoming database challenges strengthened my skills, while designing a satisfying user interface 
                      brought joy. Integrating the ChatGPT API expanded our capabilities. Perseverance in problem-solving was crucial. This transformative 
                      experience emphasized empathy in development. Proud of our impact, I'm excited for future endeavors.""
                    </span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <div class="text-center">
                <div class="developer-container">
                  <div class="speech-box-right">
                    <p><span class="highlight">"Throughout this project, I gained valuable skills in time management, collaboration, problem-solving, and pushing 
                      beyond my limits. It taught me how to work under pressure, split tasks effectively, communicate openly, overcome setbacks, and unleash my 
                      creativity. I also took pride in designing a clean and user-friendly interface as a backend developer. This transformative experience has 
                      shaped my mindset and character, fostering personal growth and enhancing my technical abilities."</span></p>
                  </div>
                  <div class="developer-image-ugu">
                    <img src="{{ asset('images/ugur.png') }}" alt="Karaca Ugurkan" class="rounded-circle developer-img">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
              <p class="text-black">&copy; 2023 TaskTrackerPro. All rights reserved...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
