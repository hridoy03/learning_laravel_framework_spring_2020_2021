<h1>{{session('userHome')}}</h1>
<h1>Welcome User {{session('username')}}</h1>
<br>
<a href="{{route('logout')}}"><button >Logout</button></a>