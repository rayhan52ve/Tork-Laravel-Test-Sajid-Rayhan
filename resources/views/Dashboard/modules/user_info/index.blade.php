@extends('Dashboard.layout.master')
@section('content')
<div class="container" style="margin-top:80px">
    <div class="row ">
         <div class="col-md-8 offset-2">
          <div class="card">
              <div class="card-header">
                  <h3>User Info</h3>
              </div>
              <div class="card-body">
                @if(session()->has('msg'))
                      <div class="alert alert-{{session('cls')}}">
                        {{session('msg')}}
                      </div>
                @endif
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Other Info</th>
                          <th scope="col">Action</th>
  
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $sl=1
                        @endphp
                        @foreach ($user_info as $ufo)
                        <tr>
                          <th scope="row">{{$sl++}}</th>
                          <td>{{$ufo->name}}</td>
                          <td>{{$ufo->email}}</td>
                          <td>{{$ufo->other_info}}</td>
                          <td class="btn-group">
                            <a type="button" href="{{route('user-info.edit',$ufo)}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                            <form action="{{ route('user-info.destroy', $ufo)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-trash"></i></button>
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
@endsection