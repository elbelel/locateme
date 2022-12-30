<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Facility;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::all();

        return view('booking/index',['bookings'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $facilities = Facility::all();

        return view('booking/create',['facilities'=>$facilities]);
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
            'facility' => ['required', 'integer'],
        ]);

        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }

        $user = Booking::create([
            'session_id'=>'FAD'.'-'.rand(99,999),
            'duration'=>"1hour",
            'year'=>date("Y"),
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$data,
            'facilities_id'=>$request->facility
        ]);

        $bookings = Booking::all();

        return view('booking/index',['bookings'=>$bookings]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking, $id)
    {
        //
        // dd($id);
        $booking = Booking::find($id);
        $facilities = Facility::all();

        // dd($booking);
        return view('booking/edit',['booking'=>$booking, 'facilities'=>$facilities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'price' => ['required', 'integer'],
            'facility' => ['required', 'integer'],
        ]);
        
        $data = '';
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data = $filename;

        }

        $booking = Booking::find($request->id);
            $booking->duration = $request->duration;
            $booking->year=$request->year;
            $booking->description=$request->description;
            $booking->price=$request->price;
            $booking->facilities_id=$request->facility;

            if($data !== ''){
                $booking->image = $data;
            }
        $booking->save();
        $bookings = Booking::all();

        return view('booking/index',['bookings'=>$bookings]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
