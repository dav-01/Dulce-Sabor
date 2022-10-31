<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // return view('products.index', ['products' => Product::all()]);
        return route('/', ['products' => Product::all()]);
    }
}
