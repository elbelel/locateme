<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;

use Illuminate\Http\Request;
use Alert;
use GeoIP;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('product/index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $shops = Shop::all();

        return view('product/create',['shops'=>$shops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'price' => ['required', 'integer'],
            'shop' => ['required', 'integer'],
            'long' => ['required', 'string'],
            'lat' => ['required', 'string'],
        ]);

        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }

        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'long'=>$request->long,
            'lat'=>$request->lat,
            'image'=>$data,
            'shops_id'=>$request->shop
        ]);

        $products = Product::all();
        Alert::success('Successfully created Product', 'Success Message');

        return view('product/index',['products'=>$products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        //
        $product = Product::find($id);
        return view('product/product-details',['product'=>$product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        //
        $product = Product::find($id);
        $shops = Shop::all();

        return view('product/edit',['product'=>$product, 'shops'=>$shops]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'price' => ['required', 'integer'],
            'shop' => ['required', 'integer'],
            'long' => ['required', 'string'],
            'lat' => ['required', 'string'],
        ]);
        
        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }

        $product = Product::find($request->id);
            $product->name=$request->name;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->lat=$request->lat;
            $product->long=$request->long;
            $product->shops_id=$request->shop;

            if($data !== ''){
                $product->image = $data;
            }
        $product->save();
        $products = Product::all();

        return view('product/index',['products'=>$products]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    

    public function dashboard (Request $request){
        $shops = Shop::all();
        $products = Product::all();
        return view ('welcome',['shops'=>$shops,'products'=>$products]);
    }
}
