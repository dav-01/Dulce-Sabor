<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('products.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required', 'description' => 'required', 'price' => 'required', 'quality' => 'required'
        ]);

        $product = $request->all();

        Product::create($product);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {

        $product->fill(($request->input()));
        $product->saveOrFail();
        return redirect()->route('product.index')->with("mensaje", "Producto actualizado");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with("mensaje", "Producto eliminado");
    }
}
