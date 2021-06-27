<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Validator;

class productscontroller extends Controller
{
    public function index()
{return view('form');}
 public function add(Request $request)
{$products=new product();
$products->pid=request('pid');
$products->pname=request('pname');
$products->pprice=request('pprice');	
$products->pcode=request('pcode');
$products->pinstock=request('pis');
$products->pdiscount=request('pdiscount');	
$products->psize=request('psize');	
$products->pdetails=request('pdetail');	
$products->ppicture=request('picture');
   $validator = Validator::make($request->all(), [
            'pid' => 'required',
            'pname' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/form')
                        ->withErrors($validator)
                        ->withInput();
        }

 
 $destinationPath = 'uploads';
  $request->file('picture')->store('uploads');
$products->save();
return redirect('/form');}
public function view()
{$products=product::all();
return view('all',compact('products'));}
public function delete($id)
{$products = product::where('pid', $id);
$products->delete();
}
public function edit($id)
{$products = product::where('pid', $id)->first();
return view('edit',['xy'=>$products]);
}
public function update(Request $request,$id)
{$products = product::where('pid', $id)->update(request()->except(['_token']));
}
}
