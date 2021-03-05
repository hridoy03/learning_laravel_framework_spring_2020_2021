<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div align="center" style="width:100%;">
    <form action="" method="post">
        <h1>Registration</h1>
        <table>
        @csrf
            <tr>
                <td>Full-Name:</td>
                <td> <input type="text" name="full_name" id="" value="{{old('full_name')}}" ><br></td>  
            </tr>
            <tr>
                <td>Username:</td>
                <td><input  type="text" name="username" id="" value="{{old('username')}}"><br></td>    
            </tr>
            <tr>
                <td>Email:</td>
                <td><input  type="text" name="email" id="" value="{{old('email')}}"><br></td>
            </tr>
            <tr> 
                <td>Password:</td>
                <td><input type="password" name="password" id=""><br></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input  type="password" name="password_confirmation" id=""><br></td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td><input  type="text" name="phone" value="{{old('phone')}}" id=""><br></td>
            </tr>

            <tr>
                <td>City:</td>
                <td><input  type="text" name="city" value="{{old('city')}}" id=""><br></td>
            </tr>

            <tr>
                <td>Country:</td>
                <td><input type="text" name="country"  value="{{old('country')}}" id=""><br></td>
            </tr>
            <tr>
                <td>Company Name:</td>
                <td><input type="text" name="companyName" value="{{old('companyName')}}" id=""><br></td>
            </tr>
        </table>

        <button style="margin:30px" type="submit">REGISTER</button>
        
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    
    </form>
    <a href="{{route('root')}}">Go Back</a>
</div>
    
</body>
</html>