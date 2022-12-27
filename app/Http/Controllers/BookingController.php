<?php

namespace App\Http\Controllers;

use App\Booking;
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
        return view('booking/create');
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
        $user = Booking::create([
            'session_id'=>'FFY'.rand(99,999),
            'duration'=>$request->duration,
            'year'=>$request->year,
            'price'=>$request->price,
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
        // dd($booking);
        return view('booking/edit',['booking'=>$booking]);
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
        $booking = Booking::find($request->id);
            $booking->duration = $request->duration;
            $booking->year=$request->year;
            $booking->price=$request->price;
            $booking->facilities_id=$request->facility;
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
