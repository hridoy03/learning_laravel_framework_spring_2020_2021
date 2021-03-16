<h1>{{session('userHome')}}</h1>
<h1>Welcome User {{session('username')}}</h1>
<br>
<a href="{{route('sales')}}"><p>Sales Channel</p></a>
<a href="{{route('product')}}"><h4>Product Management</h4></a>
<a href="{{route('logout')}}"><button >Logout</button></a>