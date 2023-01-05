<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use Alert;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops = Shop::all();

        return view('shop/index',['shops'=>$shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shop/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'long' => ['required', 'string'],
            'lat' => ['required', 'string'],
            'name' => ['required', 'string'],
            'category' => ['required', 'string']
        ]);

        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }

        Shop::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'long'=>$request->long,
            'lat'=>$request->lat,
            'image'=>$data,
            'category'=>$request->category
        ]);

        $shops = Shop::all();
        Alert::success('Successfully created Shop', 'Success Message');

        return view('shop/index',['shops'=>$shops]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop,$id)
    {
        //
        $shop = Shop::find($id);
        return view('shop/edit',['shop'=>$shop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
        $request->validate([
            'long' => ['required', 'string'],
            'lat' => ['required', 'string'],
            'name' => ['required', 'string'],
            'category' => ['required', 'string']
        ]);

        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }
        $shop = Shop::find($request->id);
            $shop->name=$request->name;
            $shop->description=$request->description;
            $shop->lat=$request->lat;
            $shop->long=$request->long;
            $shop->category=$request->category;

            if($data !== ''){
                $shop->image = $data;
            }
        $shop->save();
        $shops = Shop::all();

        return view('shop/index',['shops'=>$shops]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
