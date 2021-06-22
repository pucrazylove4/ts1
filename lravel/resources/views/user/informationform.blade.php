@extends('AdminLTE3view.AdminLTE-Auth.customer')
@section('title')
    {{$title}}
@endsection
@section('users_information')

    @csrf
    <div class="row m-2 d-flex justify-content-center">
        <div class="alert alert-success alert-block" style="display: none;">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong class="success-msg"></strong>
        </div>
    </div>
    <div class="row">
        
        <div class="container">
            
        <form id="formMD" method="post" action="{{route('custom-create')}}">
           
            <div class="form-group position-relative ">
            <label for="exampleInput" id="ame" class="col-sm-4">Name: </label>
            <input type="nameuser"  style="width: 75%" class="form-control d-inline col-sm-7"  aria-describedby="nameuserHelp" placeholder="Họ và tên"
                id="name" name="name" value="{{ old('name') }}"> 
            <span class="text-danger error-text nameErr position-absolute mt-2 w-100 ml-2"></span>
                {{-- @error('name')
                    <div  style="width: 90%" id="Mname" class="ml-2 alert-danger alert-block border border-secondary rounded">{{$message}}</div>
                @enderror
                 --}}
                
            </div>
            <div class="form-group position-relative ">
                <label for="exampleInput" class="col-sm-4" >Email:</label>
                <input type="emailuser" style="width: 75%" class="form-control d-inline col-sm-7"  aria-describedby="nameuserHelp" placeholder="Email"
                  id="email"  name="email" value="{{ old('email') }}">
                  <span class="text-danger error-text emailErr position-absolute mt-2 w-100 ml-2"></span>
            </div>
            <div class="form-group"position-relative >
                <label for="exampleInput" class="col-sm-4" >Password:</label>
                <input type="password" style="width: 75%" class="form-control d-inline col-sm-7"  aria-describedby="nameuserHelp" placeholder="Password"
                  id="password"  name="password">
                  <span class="text-danger error-text passwordErr position-absolute mt-2 w-100 ml-2"></span>
            </div>
            <div class="form-group position-relative ">
                <label for="exampleInput" class="col-sm-4" >Confirm:</label>
                <input type="password" style="width: 75%" class="form-control d-inline col-sm-7"  aria-describedby="nameuserHelp" placeholder="Retype Password"
                  id="password_confirmation"  name="password_confirmation">
                  <span class="text-danger error-text password_confirmationErr position-absolute mt-2 w-100 ml-2"></span>
            </div>
                {{-- @error('email')
                    <div  style="width: 90%" name="Memail" class="ml-2 alert-danger border border-secondary rounded">{{$message}}</div>
                @enderror--}}
            <div class="form-group"position-relative > 
            <label for="exampleInputPassword1" class="col-sm-4">Birth:</label>
            <input type="text" style="width: 75%" id="birth" class="form-control d-inline col-sm-7"  placeholder="Ngày Sinh" name="birth">
            <span class="text-danger error-text birthErr position-absolute mt-2 w-100 ml-2"></span>
                 {{-- @error('birth')
                    <div  style="width: 90%" name="Mbirth" class="ml-2 alert-danger border border-secondary rounded">{{$message}}</div>
                @enderror--}}
            </div> 
            <div class="form-group"position-relative >
            <label for="exampleInputPassword1" class="col-sm-4">Address: </label>
            <input type="text" id="address" style="width: 75%" class="form-control d-inline col-sm-7"  placeholder="Địa chỉ" name="address">
            <span class="text-danger error-text addressErr position-absolute mt-2 w-100 ml-2"></span>
                {{-- @error('address')
                    <div  style="width: 90%" name="Maddress" class="ml-2 alert-danger border border-secondary rounded">{{$message}}</div>
                @enderror--}}
            </div> 
            <div class="form-check ml-n3">
                <label for="exampleInputPassword1" class="col-sm-4">Gender:</label>
                <select  class="form-select rounded-pill p-2" id="gender" aria-label="Default select example" name='gender'>
                    {{-- <option selected>Chọn giới tính</option> --}}
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                    
                  </select>
            </div>
            
            <button type="submit" id="btnsubmit" class="btn btn-primary w-25 mt-2">Gửi</button>
        </form>
        <small class="row m-2 d-flex justify-content-center "><a href="{{route('login-view')}}">I already have an account, sign in</a></small>
        
        </div>
    </div>
@endsection