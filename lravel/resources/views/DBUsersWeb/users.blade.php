<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $err)
                <li>
                    {{$err}}
                </li>
            @endforeach
        </ul>
    @endif
       <form action="{{route('abc')}}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <label for="birth">birth</label>
        <input type="text" name="birth" id="">
        <label for="gender">gender</label>
        <select name="gender" id="gender">
            <option value="0">Nam</option>
            <option value="1">Nu</option>
        </select>
        <input type="submit" value="Gui">
    </form>
    @foreach($users as $user)
        <p>
            {{ $user->name }} <br>
            {{ $user->birth }} <br>
            {{$user->gender==0 ? 'nam' :'nu' }} 
        </p>
    @endforeach
        {{-- @if (isset($name))
            <p>
                {{$name}}
            </p>
        @endif --}}
</body>
</html>