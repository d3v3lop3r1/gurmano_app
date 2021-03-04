<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoductRequest $request)
    {
        $validated = $request->validated();
        $products = Product::create($validated);

        if($products){
            return redirect('/admin/products')->with('status', 'A termék sikeresen elmentve!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $prod = $product->where('id',$id);
        return view('admin.update_product', compact('prod','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StorePoductRequest $request, Product $product, $id)
    {
        $updated_datas = $request->except(['_method','_token']);
        $prod_to_update = Product::where('id',$id);
        $updated = $prod_to_update->update($updated_datas);
        if($prod_to_update){
            return redirect('/admin/products')->with('status', 'A termék sikeresen frissítve!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
