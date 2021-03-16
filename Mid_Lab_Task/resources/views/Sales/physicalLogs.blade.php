<h1>Physical Store Sales Logs</h1>

<a href="{{route('sales.physical.logs.sales.download')}}"><button style="margin:10px">Download Sales Report</button></a><br>
<a href="{{route('sales.physical.logs.pending.download')}}"><button style="margin:10px">Download Pending Logs</button></a><br>

<a href="{{route('sales.physical')}}"><button>Go Back</button></a>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">

<h1>File Upload Section</h1>

<input type="file" name="file" id="">
<button type="submit">Submit</button>
</form>




