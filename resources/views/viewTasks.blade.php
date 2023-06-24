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
                            <p class="description-text">{{ $todo->description}}</p>
                            <p class="description-label">Ai's reccomendation:</p>
                            <p>{{ $response ?? 'No response from the API' }}</p>
                        </div>
                        <a href="{{ route('todo') }}" class="return-button"><i class="fa-regular fa-square-caret-left"></i> <span style="font-weight: bold;">Return to Todo List</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>{{ $response ?? 'No response from the API' }}</p>
</section>
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
    <title>View Task</title>
</head>
<body>
    <h1>Task Solution</h1>
    
    <p>{{ $response ?? 'No response from the API' }}</p>
</body>
</html>  --}}