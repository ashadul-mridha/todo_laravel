@extends('layouts.app')

@section('todo')
    <div class="text-center">
        <a href="{{ route('todo.index') }}" class="btn btn-primary">Go Back</a>
    </div>
    <br>
    <br>
    <br>
    <div>
        <span class="text-primary h2">Goal:  </span>
        <span class="text-dark h5">{{ $todo->text }}</span>   
    </div>
    <br>
    <div>
        <span class="text-primary h2">Details:  </span>
        <span class="text-dark h5">{{ $todo->body }}</span>   
    </div> 
    <br>
    <div>
        <span class="text-primary h2">Date:  </span>
        <span class="text-warning h5">{{ $todo->due }}</span>   
    </div>
    <div class="text-center">
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-info">Edit</a>
    </div>
@endsection