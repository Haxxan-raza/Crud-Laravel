<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
  // this function use for add data in table;
    public function create()
    {
        //
        return view('products.create');
       
    }

 // this function use for store data in database    
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
          $res = new Product;
          $res->name=$request->input('name');
          $res->detail=$request->input('detail');
          $res->save();
          $request->session()->flash('msg','Data submitted');
          return redirect('products');
    }

   // this use for disply data in front view
    public function show(Product $product)
    {
         $products = Product::latest()->paginate(5);
    
         return view('products.show')->with('ProductArr', Product::all())
        ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('products.show')->with('ProductArr', Product::all());
    }

    //this function use for edit data . 

    public function edit(Product $product , $id)
    {
    return view('products.edit')->with('ProductArr', Product::find($id));
    }

    //this use for update data ;
    public function update(Request $request, Product $product)
    {
         $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $res =Product::find($request->id);
        $res->name=$request->input('name');
        $res->detail=$request->input('detail');
        $res->save();

        $request->session()->flash('msg','Data updated');
        return redirect('products');
        
    }

     // this function use for destroy or delete data your databse ;
    public function destroy(Product $product, $id)
    {
        Product::destroy(array('id',$id));
        return redirect('products')
        ->with('success','Product deleted successfully');
    // echo "<pre>"; print_r($product);
    }
}
