@extends('layout.app')
@section('content')

<div class="container">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-12">
          @if(session('status'))
              <div class="alert alert-success">{{session('status')}}</div>
          @endif
          <a href="{{url('create')}}" class="btn btn-outline-success">Add Employee</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Posted BY</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($row as $item)
                      <tr>  
                    <td >{{$item->id}}</th>
                    <td>{{$item->username}}</td>
                    <td>{{$item->User_id}}</td>
                    <td>{{$item->location}}</td>
                    <td><a href="/edit/{{$item->id}}" class="btn btn-outline-warning">Edit</a>/<a href="/destroy/{{$item->id}}" class="btn btn-outline-danger"> Trash</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection