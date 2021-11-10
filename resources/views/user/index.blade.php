@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">


                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                  Users

                  <a href="{{route('register')}}" class="ml-5">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                    </svg>
                    Add New User
                  </a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <table class="table table-striped">
                                    
                                    <tbody>

                                      @foreach($users as $user)
                                          <tr>
                                            <th scope="row">1</th>


                                            <td>{{$user->email}}</td>
                                            <td>


                                             <form action="{{route('user.destroy', $user->id)}}" method="POST" class="">
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger ml-4">


                                                  Delete

                                              </button>
                                                @csrf
                                            </form>

                                            </td>
                                        
                                          </tr>
                                      @endforeach
                                      
                                     
                                    </tbody>
                                  </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
