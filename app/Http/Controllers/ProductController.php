<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function listAllTheProducts()
    {
        $products = DB::table('products')->simplePaginate(15);
        return view('products.products',['products'=>$products]);
    }

    public function show($productId)
    {
        $product = Product::find($productId);
        // dump($product);
        return view('products.product',['product'=>$product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'supplier_id' => 'required|numeric',
            'supplier_order_id' => 'required|numeric',
            'product_category_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $product = new Product($request->input());

        if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = time().'.'.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->image = $fileName ;
        }
        $product->save() ;
        return back()->with('success', 'Le produit à bien été ajouté');;
    }

    public function edit($productId)
    {
        $product = Product::find($productId);
        return view('products.edit',['product'=>$product]);
    }

    public function update(Request $request ,$productId)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'supplier_id' => 'required|numeric',
            'supplier_order_id' => 'required|numeric',
            'product_category_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $product = Product::find($productId);

        if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = time().'.'.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->image = $fileName ;
        }
        $product->name = $request->get('name');
        $product->supplier_id = $request->get('supplier_id');
        $product->supplier_order_id = $request->get('supplier_order_id');
        $product->product_category_id = $request->get('product_category_id');
        $product->quantity = $request->get('quantity');
        $product->price = $request->get('price');
        $product->save() ;
        return back()->with('success', 'Le produit à bien été modifié');
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product->delete();
        return redirect('products')->with('success','Le produit à bien été supprimé');
    }

    public function sortByName()
    {
        $products = DB::table('products')->orderBy('name')->get();
        return view('products.products',['products'=>$products]); 
    }

    public function sortBySupplier()
    {
        $products = DB::table('products')->orderBy('supplier_id')->get();
        return view('products.products',['products'=>$products]); 
    }

    public function sortByQuantity()
    {
        $products = DB::table('products')->orderBy('quantity')->get();
        return view('products.products',['products'=>$products]); 
    }

    public function sortByPrice()
    {
        $products = DB::table('products')->orderBy('price')->get();
        return view('products.products',['products'=>$products]);   
    }

    public function newProducts()
    {
        $products = DB::table('products')->orderBy('created_at')->get();
        return view('products.products',['products'=>$products]);   
    }
}
