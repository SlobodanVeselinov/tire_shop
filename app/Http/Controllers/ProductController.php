<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TyreModel;
use App\Models\TyreSize;
use App\Models\TyreType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = TyreModel::all();
        $types = TyreType::all();
        $sizes = TyreSize::all();
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.index', compact('products', 'models', 'types', 'sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = TyreModel::orderBy('name', 'asc')->get();
        $sizes = TyreSize::all();
        $types = TyreType::all();
        return view('admin.product.create', compact('models', 'sizes', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $this->validate($request, [
            'quantity' =>'integer',
            'purchase_price' =>'integer',
            'sale_price' =>'integer',
            'year_of_production' =>'integer'
        ]);

        $product->model = $request->model;
        $product->type = $request->type;
        $product->size = $request->size;
        $product->year_of_production = $request->year_of_production;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->save();

        Alert::toast('You have successfully saved new product', 'success');
        // session()->flash('product-created', 'Product was added successfully.');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
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
