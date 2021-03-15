<h1>Physical Store Sales</h1>

<table>
    <tr>
        <td>Today's Sales:</td>
        <td>{{$info['pt']}} items</td>
    </tr>
    <tr>
        <td>This week Sales:</td>
        <td>{{$info['ps']}} items</td>
    </tr>
    <tr>
        <td>Most Sold Product:</td>
        <td>{{$info['bp']}}</td>
    </tr>
    <tr>
        <td>Average Sale of this month</td>
        <td>{{$info['average']}} BDT</td>
    </tr>



</table>

<form action="" method="post">
@csrf
    <table>
        <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name" id="" ></td>
        </tr>
        <tr>
                <td>Address</td>
                <td><input type="text" name="address" id="" ></td>
        </tr>
        <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" id=""></td>
        </tr>
        <tr>
                <td>Product Id</td>
                <td><input type="text" name="product_id" id="" ></td>
        </tr>
        <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name" id=""></td>
        </tr>
        <tr>
                <td>Unit Price</td>
                <td><input type="number" name="unit_price" id=""></td>
        </tr>
        <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity" ></td>
        </tr>
        <tr>
                <td>Total Price</td>
                <td><input type="number" name="total_price"></td>
        </tr>
        <tr>
                <td>Payment Type</td>
                <td>
                    <select name="payment_type" id="">
                        <option value="">Payment Method</option>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                        <option value="online">Online</option>
                    </select>
                </td>
        </tr>

    </table>
    <button type="submit">Add</button>
    @foreach ($errors->all() as $err)
        <p>{{$err}}</p>
        @endforeach
</form>
<p>{{session('Msg')}}</p>

<a href="{{route('physical.logs')}}"><button style="margin:10px">View Sales Logs</button></a><br>

<a href="{{route('sales')}}"><button style="margin:10px">Go Back</button></a>
