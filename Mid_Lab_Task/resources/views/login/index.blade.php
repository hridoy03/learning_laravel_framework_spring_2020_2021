<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div align="center" style="width:100%;padding-top:40px;">
<h1>CMS</h1>
    <form action="" method="post">
    @csrf
    <table>
    <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="{{old('email')}}" id=""><br></td>
    </tr>

    <tr>
    <td>Password</td>
    <td><input type="password" name="password" id=""><br></td>
    </table>
    </tr>

    <button style="margin-top:15px" type="submit">Login</button>

    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach

    <a href="{{route('registration')}}"><h2>Registration</h2></a>

    </form>
    

</div>
</body>
</html>