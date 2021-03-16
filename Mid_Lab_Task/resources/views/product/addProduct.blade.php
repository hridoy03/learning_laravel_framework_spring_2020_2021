<h1>Product Adding</h1>


<form action="" method="post">
    <table>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="product_name" value="{{old('product_name')}}" id=""></td>
        </tr>
        <tr>
            <td>Category:</td>
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
            <td>Unit Price:</td>
            <td><input type="number" name="unit_price" id=""></td>
        </tr>
        <tr>
            <td>Vendor Name:</td>
            <td style=>
                <select name="vendor_id" id="">
                    <option value="" selected>Select a vendor name</option>
                </select>
            </td>
        </tr>

        <tr>
        <td>Status:</td>
            <td>
                <select  name="status" id="">
                    <option value="" selected>Select Status</option>
                    <option value="existing">Existing</option>
                    <option value="upcoming">Upcoming</option>
                </select>
            </td>
        </tr>

        

    </table>


    <br>
    <button type="submit">Add Product</button><br>
</form>

<a href="{{route('product')}}"><button >Go BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>
