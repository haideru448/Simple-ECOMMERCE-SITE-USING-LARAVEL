<!doctype html>
<html>
<head>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	a.deco-none {
    color: inherit;
    text-decoration:none;
	
}
			.mycol{ 
				text-align: right;
		}
#btn
{text-shadow:2px 2px red;}
#btn2
{color:red;}

	.carousel-inner{
  width:100%;
  max-height: 300px !important;
}
#log
{text-align:right;}

	</style>


</head>
<body>

		
    <div class="container-fluid"><div class="row"><div class="col-md-4"><i style="font-size:40px;" class="fa fa-shopping-cart" aria-hidden="true"></i><span style="font-size: 70px;">BUYON.PK</div>
		<div class="col-md-8" >
		<div class="mycol">
			<span style="color:blue; font-size: 20px "><a href="https://twitter.com/" title="twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>&nbsp;<span style="color:yellow;font-size: 20px;"><a href="https://www.snapchat.com/" class="deco-none" title="snapchat.com" target="_blank"><i class="fa fa-snapchat" aria-hidden="true"></i></a></span>&nbsp;<span style="color:red;font-size: 20px;"><a href="ht
				tps://www.youtube.com/" class="deco-none" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></span>&nbsp;<span style="color: blue;font-size: 20px;"><a href="https://www.facebook.com/unsupportedbrowser?_rdr" title="facebook.com" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span> 
			</div>
		
		</div> </div></div></span>
  
<div class="container-fluid">
<div class="row"> 
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav pull-right">
       <li class="nav-item active">
     
  
        
       </li>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav pull-right">
       <li class="nav-item active">
 </li>
    </ul>
  </div>

	
 	
		</nav></div></div></div>
</div>
<br><div id="btn"><center><h1>Dashboard</h1></center></div>
<div class="container-fluid">
<center><a href="/view">For viewing all records</a></center> 
<center><form action="/update/{{$xy->pid}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

Productid <br>  <input type="number" name="pid" value="{{$xy->pid}}"><br>
ProductName <br><input type="text" name="pname" value="{{$xy->pname}}"><br>
Productprice <br><input type="number" name="pprice" value="{{$xy->pprice}}"><br>
Productcode <br><input type="text" name="pcode" value="{{$xy->pcode}}"><br>
Product Stock <br><select name="pinstock" value="{{$xy->pinstock}}"><br>
<option value="Y">Y</option>
<option value="N">N</option>
</select><br>
ProductDiscount <br><input type="number" name="pdiscount" value="{{$xy->pdiscount}}"><br>
Productsizes <br><input type="text" name="psize" value="{{$xy->psize}}"><br>
Productdetails <br><input type="text" name="pdetails" value="{{$xy->pdetails}}"><br>
Image<br><input type="file" name="ppicture" value="{{$xy->picture}}">
<input type="submit" value="Add this Detail" name="submit">

</form>  @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach</center>

</div>

</body>
</html>