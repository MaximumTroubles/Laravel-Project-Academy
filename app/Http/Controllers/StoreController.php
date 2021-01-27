<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function sale()
    {
        $products = Product::all();
        $categories = Category::all();
        // dd($products);
        return view('main.sale' ,compact('products','categories'));
    }
}
