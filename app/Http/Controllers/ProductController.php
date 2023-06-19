<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::latest()->filter(request(['search']))->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'imageUrl' => ['required'],
            'rating' => ['required'],
        ]);

        return Product::create($validate);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->update($request->all());

        return $product;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Product::destroy($id);
    }

    public function Search()
    {
    }
}
