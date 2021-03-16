<h1>Upcoming Product List</h1>


<table border="3px solid black"> 
@foreach ($products as $product)
    <tr>
        <td>PRODUCT ID</td>
        <td>PRODUCT NAME</td>
        <td> CATAGORY</td>
        <td>UNIT PRICE</td>
        <td>QUANTITY</td>
        <td>DATE ADDED</td>
    </tr>
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->unit_price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{substr($product->date_added,0,10)}}</td>
        <td><a href="{{route('product.upcoming.edit',['id'=> $product->id])}}"><button>Edit</button></a></td>
        <td><a href="{{route('product.upcoming.delete')}}"><button >Delete</button></a></td>
        <td><a href=""><button >View Details</button></a></td>
    </tr>
    @endforeach
</table><br>



<a href="{{route('product')}}"><button>Go BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>
