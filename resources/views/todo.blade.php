<head>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
@extends('layouts.app')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@include('includes.navigation')
@section('content')
<head>
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <form action="{{route('tasks.store')}}" id="taskForm" action="{{route('tasks.store')}}" method="POST" class="d-flex justify-content-center align-items-start mb-1">
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
          
          <div class="form-outline flex-fill ms-2 mb-2">
            <textarea id="description" name="description" class="form-control" rows="1" required></textarea>
            <label class="form-label" for="description">Description</label>
          </div>
          
          @csrf
          
          <button type="submit" class="btn btn-info ms-2">Add</button>
        </form>
      </div>
              @if($todos->isEmpty())
                <p>No todos found.</p>
              @else
                <ul>
                    @foreach($todos as $todo)
                        @php
                            $high='<span class="badge bg-danger">High priority</span>';
                            $middle='<span class="badge bg-warning">Middle priority</span>';
                            $low='<span class="badge bg-success">Low priority</span>';
                        @endphp
                        <a href="{{ route('tasks.view', ['id' => $todo->id]) }}" class="todolist">
                            {{ $todo->task_title }} 
                            @if($todo->priority == "high") 
                                {!! $high !!} 
                            @elseif($todo->priority == "middle")
                                {!!$middle!!}
                            @elseif($todo->priority == "low")
                                {!!$low!!}
                            @endif
                        </a>
                        <a href="{{route('tasks.delete', ['id' => $todo->id]) }}" class="delete-link"><i class="fa-solid fa-trash-can"></i>
                        <a href="{{route('tasks.complete', ['id' => $todo->id]) }}" class="complete-link"><i class="fa-regular fa-square-check"></i>
                          <div id="successToast" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                                Task completed successfully.
                            </div>
                        </div>
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
@include('layouts.footer')
