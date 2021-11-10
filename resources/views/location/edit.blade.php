@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">

                 

                       <form action="{{route('location.destroy', $location->id)}}" method="POST" class="">
                            @method('DELETE')

                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                              </svg>

                                  <span class="pl-3 dashboard">
                                      Edit Location
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

                        <div class="row">

                            <div class="col-md-12 " >
                                 
                                <form action="{{route('location.update', $location->id)}}" method="POST">
                                  @method('PATCH')
                                  @csrf
                            

                                  <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="color" id="exampleRadios2" value="gray"

                                        @if($location->color == 'gray')
                                          checked
                                      @endif
                                    >
                                    <label class="form-check-label" for="exampleRadios2">
                                      Gray
                                    </label>
                                  </div>


                                  <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="color" id="exampleRadios2" value="green"

                                    @if($location->color == 'green')
                                        checked
                                    @endif

                                    
                                    >
                                    <label class="form-check-label" for="exampleRadios2">
                                      Green
                                    </label>
                                  </div>


                                  <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="color" id="exampleRadios1" value="red" 

                                    @if($location->color == 'red')
                                        checked
                                    @endif


                                    >
                                    <label class="form-check-label" for="exampleRadios1">
                                      Red
                                    </label>
                                  </div>
                                  

                                  <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="color" id="exampleRadios2" value="blue" 

                                    @if($location->color == 'blue')
                                        checked
                                    @endif

                                    >
                                    <label class="form-check-label" for="exampleRadios2">
                                      Blue
                                    </label>
                                  </div>

                                  <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="place">
                                          {{old('place') ?? $location->place}}
                                    </textarea>
                                    <button type="submit" class="btn btn-primary mt-3">Update Location</button>
                                  </div>
                                </form>
                            </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
