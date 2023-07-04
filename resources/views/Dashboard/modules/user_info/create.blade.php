@extends('Dashboard.layout.master')
@section('content')
  <div class="container" style="margin-top:80px">
    <div class="row ">
     <div class="col-md-6 offset-3">
          <div class="card">
              <div class="card-header">
                  <h3>Insert User Info</h3>
              </div>
              <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
                  <form action="{{route('user-info.store')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="Enter Name" value="{{ old('name') }}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="" placeholder="Enter Email" value="{{ old('email') }}">
                      </div>
                      <div class="form-group">
                        <label for="other_info">Other Info</label>
                        <textarea type="text" name="other_info" class="form-control" id="" placeholder="Enter Other Info" value="{{ old('other_info') }}" rows="3"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
          </div>
       </div>
    </div>
  </div>
@endsection