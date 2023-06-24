@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col text-center">
                <h1 class="display-4 text-black"><strong>{{ $todo->task_title }}</strong></h1>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        @php
                            $high='<span class="badge bg-danger">High priority</span>';
                            $middle='<span class="badge bg-warning">Middle priority</span>';
                            $low='<span class="badge bg-success">Low priority</span>';
                        @endphp
                        <p class="priority">
                            @if($todo->priority == "high") 
                                {!! $high !!} 
                            @elseif($todo->priority == "middle")
                                {!! $middle !!}
                            @elseif($todo->priority == "low")
                                {!! $low !!}
                            @endif
                        </p>
                        <div class="description-container">
                            <p class="description-label">Description:</p>
                            <p class="description-text">{{ $todo->description }}</p>
                        </div>
                        <a href="{{ route('todo') }}" class="return-button"><i class="fa-regular fa-square-caret-left"></i> <span style="font-weight: bold;">Return to Todo List</span></a>
                    </div>
                    <button id="chatBtn" class="btn btn-primary">Call for AI's help</button>
                    <div class="textbox-container">
                        <div class="textbox">
                          <span id="chatResponse"></span>
                        </div>
                      </div>                                        
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script>
        document.getElementById("chatBtn").addEventListener("click", function() {
            // Make API call to OpenAIController's index method using AJAX
            var taskTitle = "{{ $todo->task_title }}";
            var description = "{{ $todo->description }}";
    
            var data = {
                task_title: taskTitle,
                description: description
            };
    
            // Send an AJAX request
            console.log("Sending AJAX request...");

            $.ajax({
                url: "{{ route('openai.index') }}",
                type: "POST",
                dataType: "json",
                data: data,
                success: function(response) {
                    console.log(response);
                    // Display the response in the textbox
                    document.getElementById("chatResponse").innerHTML = response.choices[0].message.content;
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>
@endsection
