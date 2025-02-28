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
            'user' => 'required|exists:users,id',
            'event' => 'required|exists:events,id',
        ]);

        $reservation = new Reservation();
        $reservation->status = $request->status;
        $reservation->price = $request->price;
        $reservation->user = $request->user;
        $reservation->event = $request->event;
        $reservation->save();

        return response()->json([
            'status' => 200,
            'message' => 'Reservation created successfully.',
        ]);
    }
}
