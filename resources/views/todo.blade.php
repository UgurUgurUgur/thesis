<head>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
@extends('layouts.app')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@section('content')
<head>
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">      
       {{--  submit the form to the tasks store route action is always needed --}}
      
        <form action="{{route('tasks.store')}}" id="taskForm" action="{{route('tasks.store')}}" method="POST" class="d-flex justify-content-center align-items-center mb-1">
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
              @if($todos->isEmpty())
                  <p>No todos found.</p>
              @else
                <ul>
                  @foreach($todos as $todo)
                    <li>{{ $todo->task_title }}</li>
                  @endforeach
                </ul>
              @endif
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</head>
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
<head><?php include 'footer.php'; ?></head>
