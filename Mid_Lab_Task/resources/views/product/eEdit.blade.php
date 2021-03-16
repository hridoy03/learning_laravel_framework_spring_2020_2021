
<h1>Existing Product Edit</h1>

<form action="" method="post">
    <table style="margin-top:3%">
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="product_name" id="" value="{{$product->product_name}}"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="category" id="">
                    <option value="" selected>Select A Category</option>
                    <option value="Liquid">Liquid</option>
                    <option value="Vegetable">Vegetable</option>
                    <option value="Meat">Meat</option>
                    <option value="Makeup">Makeup</option>
                    <option value="Grocery">Grocery</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td><input type="number" name="unit_price" id="" value="{{$product->unit_price}}"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status" id="">
                    <option value="" selected>Select Status</option>
                    <option value="existing">Existing</option>
                    <option value="upcoming">Upcoming</option>
                </select>
            </td>
        </tr>

    </table>

    <button type="submit">Update</button>

</form>


<a href="{{route('product.existing')}}"><button >Go BACK</button></a><br>

<a href="{{route('logout')}}"><button >Logout</button></a>

