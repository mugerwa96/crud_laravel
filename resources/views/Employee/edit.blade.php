@extends('layout.app')
@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h4> Edit Employee </h4>
                </div>
                <div class="card-body">
                    <form mathod="POST" action="/update/{{$row->id}}">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" name="username"  value="{{$row->username}}"class="form-control">
  
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">location</label>
                          <input type="text" name="location" value="{{$row->location}}" class="form-control" id="exampleInputPassword1">
                        </div>
                     
                        <button type="submit" name="save" class="btn btn-outline-warning">Update Employee</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection