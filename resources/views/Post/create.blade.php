
@extends('layout.app')
@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h4> Add Employee </h4>
                </div>
                <div class="card-body">
                    <form mathod="POST" action="/store">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">location</label>
                          <input type="text" name="location" class="form-control" id="exampleInputPassword1">
                        </div>
                     
                        <button type="submit" name="save" class="btn btn-outline-primary">Add Employee</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection