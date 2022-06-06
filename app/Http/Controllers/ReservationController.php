<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('deleted_at', null)->get();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->Guest = $request->guestcount;
        $reservation->time = $request->time;
        $reservation->date = $request->date;
        if($request->message!=null){
            $reservation->message = $request->message;
        }

        $reservation->save();

        return redirect()->route('reservation.index')->with('message', 'Your reservation has been sent successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($reservationId)
    {
        $reservation = Reservation::find($reservationId);
        return view('admin.reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reservationId)
    {
        $reservation = Reservation::find($reservationId);
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->Guest = $request->guestcount;
        $reservation->time = $request->time;
        $reservation->date = $request->date;
        $reservation->status = $request->status;

        $reservation->save();

        return redirect()->route('reservation.index')->with('message', 'Your reservation has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($reservation)
    {
        $reservation = Reservation::withTrashed()->find($reservation);
        if ($reservation->trashed()) {
            $reservation->forceDelete();
        } else {
            $reservation->delete();
        }
        return redirect()->route('reservation.index')->with('message', 'Your reservation has been deleted successfully.');
    }

    public function binindex()
    {
        $reservations = Reservation::onlyTrashed()->get();
        return view('admin.reservation.bin', compact('reservations'));
    }

    public function restore($reservation)
    {
        $reservation = Reservation::withTrashed()->find($reservation);
        $reservation->restore();
        return redirect()->route('reservation.index')->with('message', 'Your reservation has been restored successfully.');
    }
}
