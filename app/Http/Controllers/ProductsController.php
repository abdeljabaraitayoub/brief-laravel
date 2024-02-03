<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductsRequest $request)
    {
        $products = new products();

        $products->title = $request->title;
        $products->price = $request->price;
        $products->description = $request->description;

        $imagename = time() . '.' . $request->image->extension();
        $products->image = "/images" . "/" . $imagename;
        $request->image->move(public_path('images'), $imagename);

        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = products::find($id);
        return view('products.edit', compact('products'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductsRequest $request, $id)
    {
        $product = products::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;

        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagename);
        $product->image = "/images" . "/" . $imagename;

        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        products::find($id)->delete();
        return redirect()->route('product.index');
        //
    }
}
