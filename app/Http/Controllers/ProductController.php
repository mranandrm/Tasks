<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
     {
         $products = Product::where('stock', '>', 10)->get();
        //  note : SELECT * FROM products WHERE stock > 10;
        
        // UPDATE products
        // SET stock = stock - 3
        // WHERE id = 2;
        return view('admin.products.index',compact('products'));
     }

     
}
