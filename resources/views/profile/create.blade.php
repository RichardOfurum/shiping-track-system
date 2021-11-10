@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                  </svg>

                    <span class="pl-3 dashboard">
                        Add New Track
                    </span>

                    

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        
                           <form action="{{route('profile.store')}}" method="POST" class="pb-5" enctype="multipart/form-data">

                            <div class="form-check">
                              <input type="checkbox" name="active" value="1" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Active</label>
                              <p class='text-danger'>  {{$errors->first('active')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Sender</label>
                              <input type="text" class="form-control" value="{{old('sender')}}" name="sender" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Sender's Name</small>
                              <p class='text-danger'>  {{$errors->first('sender')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Reciever</label>
                              <input type="text" class="form-control" value="{{old('reciever')}}" name="reciever" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Reciever's Name</small>
                              <p class='text-danger'>  {{$errors->first('reciever')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Destination</label>
                              <input type="text" class="form-control" value="{{old('destination')}}" name="destination" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Destination of the package</small>
                              <p class='text-danger'>  {{$errors->first('destination')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Track Code</label>
                              <input type="text" class="form-control" value="{{old('track_code')}}" name="track_code" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Track Code</small>
                              <p class='text-danger'>  {{$errors->first('track_code')}} </p>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Track</button>
                          @csrf
                    </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
