<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string',
            'price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'parking_id' => 'required|exists:parkings,id',
        ]);

        $reservation = new Reservation();
        $reservation->status = $request->status;
        $reservation->price = $request->price;
        $reservation->user_id = $request->user_id;
        $reservation->event_id = $request->event_id;
        $reservation->parking_id = $request->parking_id;
        $reservation->save();

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }
}
