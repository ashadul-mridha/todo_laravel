@extends('layouts.app')

@section('todo')
    @foreach ($todos as $todo)
        <div style="margin-left: 200px;">
            <span class="text-primary h2">{{ $todo->text }}</span>
            <span class="text-warning h4">{{ $todo->due }}</span>
            <a href="todo/{{$todo->id}}" class="btn btn-info"> Show </a>
            
                <form style="display: inline" action="/todo/{{ $todo->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button style="display: inline" class="btn btn-danger">Delete</button>
                </form>
            
            {{-- <a href="/todo/{{ $todo->id }}" class="btn btn-danger"> Delete </a> --}}
            <br>
        </div>
    @endforeach
    <div class="text-center pt-3">
        <a href="todo/create" class="btn btn-lg btn-outline-info text-center">Add New Task</a>
    </div>
    
@endsection





