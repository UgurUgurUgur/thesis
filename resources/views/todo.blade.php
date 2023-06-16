<head>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">      
        <form id="taskForm" method="POST" class="d-flex justify-content-center align-items-center mb-1">
          @csrf
          <div class="form-outline flex-fill">
            <input type="text" id="task_title" name="task_title" class="form-control" required>
            <label class="form-label" for="task_title">Task title</label>
          </div>
          
          <div class="form-outline flex-fill ms-2 w-20">
            <select id="priority" name="priority" class="form-select" required>
              <option value="high">High</option>
              <option value="middle">Middle</option>
              <option value="low">Low</option>
            </select>
            <label class="form-label" for="priority">Priority</label>
          </div>
          
          <div class="form-outline flex-fill ms-2">
            <textarea id="description" name="description" class="form-control" rows="1" required></textarea>
            <label class="form-label" for="description">Description</label>
          </div>
          
          @csrf
          
          <button type="submit" class="btn btn-info ms-2 mb-4 me-2">Add</button>
        </form>
      </div>
              <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">Task</th>
                  <th scope="col">Priority</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-normal">
                 
                  <td class="align-middle">
                    <span>Call Sam For payments</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                 
                  <td class="align-middle">Make payment to Bluedart</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                
                  <td class="align-middle">Office rent</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                 
                  <td class="align-middle">Office grocery shopping</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                
                  <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                  <td class="border-0 align-middle">
                    <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                  </td>
                  <td class="border-0 align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
<script>
  document.getElementById('taskForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get the form data
    var formData = new FormData(this);

    // Send an AJAX request to the server
    fetch('{{ route('tasks.store') }}', {
      method: 'POST',
      body: formData,
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token header
      }
    })
    .then(response => {
      // Handle the response as needed
      if (response.ok) {
        // Show a success message or update the UI
        console.log('Task added successfully!');
      } else {
        // Show an error message or handle the error
        console.error('Error adding task.');
      }
    })
    .catch(error => {
      console.error('An error occurred:', error);
    });
  });
</script>
<?php include 'footer.php';?>