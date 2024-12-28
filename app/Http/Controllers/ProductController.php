<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function list(){
        //return 'list';
        return view('products.list');
   }

   public function create(){
    //return 'create';
    return view('products.create');
   }
}
