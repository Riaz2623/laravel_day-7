<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $product;
    protected $products;


    public function index()
    {
        return view('product.add');
    }
    public function create(Request $request)
    {
        product::newProduct($request);
        return redirect()->back()->with('message', 'Product info save successfully.');
    }




    public function manage()
    {
        $this->products = Product::orderBy('id' , 'desc')->get();
        return view('product.manage-product',['products' =>$this->products]);
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit-product',['product'=> $this->product]);

    }
    public function update(Request $request)
    {
        Product::updateProduct($request);

    }
//    public function update(Request $request, $id)
//    {
//        $this->product = Product::find($id);
//        $this->product->name = $request->name;
//        $this->product->category = $request->category;
//        $this->product->brand = $request->brand;
//        $this->product->price = $request->price;
//        $this->product->description = $request->description;
//        $this->product->save();
//        return redirect('/manage-product')->with('message' , 'Product info update successfull');
//    }
//    public function delete($id)
//    {
//        $this->product = Product::find($id);
//        $this->product->delete();
//        return redirect('/manage-product')->with('message' , 'Product info delete successfull');
//
//
//    }

}
