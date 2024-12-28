<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function list(){
        $products = Product::all();
       
        return view('products.list',['products'=>$products]);
   }

   public function create(){
    //return 'create';
    return view('products.create');
   }

   public function store(Request $request){

      $products = new Product;
      $products->name = $request->name;
      $products->qtn = $request->qtn;
      $products->price = $request->price;
      $products->description = $request->description;
      $products->save();
      return redirect('/products/list')->with('msg','Produto salvo com sucesso!');
   }
}
