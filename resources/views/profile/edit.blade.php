@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                        <form action="{{route('profile.destroy', $profile->id)}}" method="POST" class="">
                            @method('DELETE')


                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                            </svg>

                              <span class="pl-3 dashboard">
                                  Edit Track
                              </span>

                            <button type="submit" class="btn btn-danger ml-4">

                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>

                           Delete

                          </button>
                            @csrf
                        </form>
    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        
                           <form action="{{route('profile.update', ['profile' => $profile->id])}}" method="POST" class="pb-5" enctype="multipart/form-data">
                            @method('PATCH')
                            <div class="form-check">
                              <input type="checkbox" name="active" value="1" class="form-check-input" id="exampleCheck1"

                                  @if($profile->active == 1)
                                        echo {{'checked'}}
                                  @endif
                              >
                              <label class="form-check-label" for="exampleCheck1">Active</label>
                              <p class='text-danger'>  {{$errors->first('active')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Sender</label>
                              <input type="text" class="form-control" value="{{old('sender') ?? $profile->sender}}" name="sender" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Sender's Name</small>
                              <p class='text-danger'>  {{$errors->first('sender')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Reciever</label>
                              <input type="text" class="form-control" value="{{old('reciever') ?? $profile->reciever}}" name="reciever" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Reciever's Name</small>
                              <p class='text-danger'>  {{$errors->first('reciever')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Destination</label>
                              <input type="text" class="form-control" value="{{old('destination') ?? $profile->destination}}" name="destination" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Destination of the package</small>
                              <p class='text-danger'>  {{$errors->first('destination')}} </p>
                            </div>

                            <div class="form-group">
                              <label for="name">Track Code</label>
                              <input type="text" class="form-control" value="{{old('track_code') ?? $profile->track_code}}" name="track_code" id="exampleInputEmail1" aria-describedby="emailHelp"  />
                              <small id="emailHelp" class="form-text text-muted">Please Enter The Track Code</small>
                              <p class='text-danger'>  {{$errors->first('track_code')}} </p>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Track</button>
                          @csrf
                    </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
