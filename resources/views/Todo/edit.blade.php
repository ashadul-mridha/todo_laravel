@extends('layouts.app')

@section('todo')
    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('todo.index') }}" class="btn btn-primary text-right">Back</a>
                <h3 class="panel-title text-center text-primary">Edit Your Future Goal</h3>
            </div>
            <div class="panel-body" style="margin-left: 100px;">
                <form class="form-horizontal" role="form" method="POST" action="/todo/{{ $todo->id }}"> 
                    @method('patch')   
                    @csrf                                
                    <div class="form-group">
                        <label class="col-md-2 h5 control-label">Goal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $todo->text }}" name="goal" placeholder="Type Your Goal">
                            @error('goal')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>                                                                        
                    <div class="form-group">
                        <label class="col-md-2 h5 control-label">Description</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $todo->body }}" name="description" placeholder="Your Goal Description">
                            @error('description')
                                 <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 h4 control-label">Date</label>
                        <div class="col-md-10">
                            <input type="text"  name="date" value="{{ $todo->due }}" class="form-control" placeholder="Enter Date">
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                    </div>
   
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
    </div> <!-- End row -->
@endsection