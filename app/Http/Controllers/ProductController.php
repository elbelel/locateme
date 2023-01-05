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
    public function show(Product $product)
    {
        //
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
        // $location = GeoIP::getLocation();

        // dd(\Request::getClientIp(true));
    //     $dLat = deg2rad($new_ latitude-$old_latitude);
    //     $dLon = deg2rad($new_longitude-$old_longitude);
	//     $radius = 6371;
    //     $a = sin($dLat/2) * sin($dLat/2) +
    //           cos(deg2rad($old_latitude)) * cos(deg2rad($new_ latitude)) *
    //           sin($dLon/2) * sin($dLon/2);
    //     $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    //    $d = $radius * $c; 

        return view ('welcome',['shops'=>$shops]);
    }
}
