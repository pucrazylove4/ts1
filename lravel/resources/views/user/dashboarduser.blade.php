@extends('AdminLTE3view.welcome')
@section('DashBoard_Users')
    <div class="container">
        <div class="row">
            <div class="col-md col-md-offset-5 m-2">
                <h4>User-Infomation</h4>
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth</th>
                        <th>Address</th>
                       
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td>{{ $LoggedUserInfo['birth'] }}</td>
                            <td>{{ $LoggedUserInfo['address'] }}</td>
                            {{-- <td>{{ $LoggedUserInfo['gender'] }}</td> --}}
                            <td><a href="{{ route('users-logout')}}">Log Out</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
