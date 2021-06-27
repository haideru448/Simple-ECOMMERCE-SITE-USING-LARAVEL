</<!doctype html>
<html>
<head>
<style>
table,tr,td
{border:2px solid black;
border-collapse: collapse;}
</style>
</head>
<body>

<center><h1>WELCOME TO VIEWS PAGE</h1></center>
<table>
<tr><th>Productid</th><th>productname</th><th>productprice</th><th>productcode</th><th>productstock</th><th>productdiscount</th><th>productsize</th><th>productdetails</th><th>productimage</th><th>Delete</th></tr>
@foreach($products as $product)
<tr><td>{{$product->pid}}</td>
<td>{{$product->pname}}</td>
<td>{{$product->pprice}}</td>
<td>{{$product->pcode}}</td>
<td>{{$product->pinstock}}</td>
<td>{{$product->pdiscount}}</td>
<td>{{$product->psize}}</td>
<td>{{$product->pdetails}}</td>
<td>
<img src="{{asset('storage/app/upload/'.$product->picture)}}" /></td>
<td><a href="/delete/{{$product->pid}}">delete</a></td>
<td><a href="/edit/{{$product->pid}}">edit</a></td>
</tr>

@endforeach
</table>
</body>
</html>