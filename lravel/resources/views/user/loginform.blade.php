@extends('AdminLTE3view.AdminLTE-Auth.login')
@section('title')
    {{-- {{$title}} --}}
@endsection
@section('users_login')

    
    <div class="row">
        
        <div class="container">
            
        <form id="formMD" method="post" action="{{ route('login-check') }}">
            @csrf
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
            <div class="form-group position-relative">
                <label for="exampleInput" class="col-sm-4" >Email:</label>
                
                <input type="emailuser" style="width: 75%" class="form-control d-inline col-sm-7"  aria-describedby="nameuserHelp" placeholder="Email"
                  id="email"  name="email" value="{{ old('email') }}">
                  <span class="text-danger position-absolute mt-2 w-100 ml-2">@error('email'){{ $message }} @enderror</span>
            </div>
            
            <div class="form-group position-relative"> 
            <label for="exampleInputPassword1" class="col-sm-4">Password:</label>
            <input type="password" style="width: 75%" class="form-control d-inline col-sm-7"  placeholder="Enter Password" 
            name="password" id="password" value="{{ old('password') }}">
                <span class="text-danger position-absolute mt-2 w-100 ml-2">@error('password'){{ $message }} @enderror</span>

            <div class="d-flex justify-content-center mt-2">
                <button type="login" id="btnlogin" class="btn btn-primary w-25 mt-2 ">Login</button>
            </div>
            <small class="d-flex justify-content-center mt-3"><a href="{{route('customer-create-view')}}">Don't have account? Click here </a></small>
        </form>
        
        </div>
    </div>
@endsection