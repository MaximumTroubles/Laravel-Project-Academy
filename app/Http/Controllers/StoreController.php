<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function sale()
    {
        // $products = Product::where('recomended', '=', 1)->where('price', '<' ,5000)->orWhere('category_id', '=' , 5)->orderBy('name')->limit('5')->get();
        $categories = Category::all();
        $products = Product::where('recomended', '=', 1)->paginate(3);
        // $products = Product::where('recomended', '=', 1)->simplepaginate(2);
        // dd($products);
       
        return view('store.sale' ,compact('products','categories'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', '='  ,$slug)->firstOrFail(); //?  если = тогда можно не писать 
        $products = Product::where('category_id', $category->id)->paginate(5);
        // dd($products);
        return view('store.category', compact('category','products'));

    }
}
