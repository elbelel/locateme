<?php

namespace App\Http\Controllers;

use App\BookingTimeSlot;
use Illuminate\Http\Request;
use App\TimeSlot;
use Illuminate\Support\Facades\Auth;


class BookingTimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return view('client-book/book',['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $times = TimeSlot::all();
        return view('client-book/date',['times'=>$times,'id'=>$id]);
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
        // dd($request);
        $user = BookingTimeSlot::create([
            'bookings_id'=> $request->id,
            'time_slots_id'=>$request->slot,
            'date'=>$request->date,
            'users_id'=>Auth::id(),
            'status'=>0
        ]);

        // dd($user);

        return view('client-book/confirm',['details'=>$user]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookingTimeSlot  $bookingTimeSlot
     * @return \Illuminate\Http\Response
     */
    public function show(BookingTimeSlot $bookingTimeSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookingTimeSlot  $bookingTimeSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingTimeSlot $bookingTimeSlot, Request $request, $id)
    {
        //
        $slot = BookingTimeSlot::where('date',$request->date)->get();

        return $slot;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingTimeSlot  $bookingTimeSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingTimeSlot $bookingTimeSlot)
    {
        //
        // dd($request);
        return view('client-book/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookingTimeSlot  $bookingTimeSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingTimeSlot $bookingTimeSlot)
    {
        //
    }
}
