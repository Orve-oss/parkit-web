<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        $parkings = Parking::all();
        return view('parkings.index', compact('parkings', 'events'));
    }

    public function create(){
        $events = Event::all();
        return view('parkings.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_place' => 'required|integer|min:1',
        ]);

        $parking = new Parking();
        $parking->event_id = $request->event_id;
        $parking->name = $request->name;
        $parking->description = $request->description;
        $parking->total_place = $request->total_place;
        $parking->save();

        return redirect()->route('parkings.index')->with('success', 'Parking created successfully.');
    }

    public function show($id)
    {
        $parking = Parking::findOrFail($id);
        return view('parkings.show', compact('parking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_place' => 'required|integer|min:1',
        ]);

        $parking = Parking::findOrFail($id);
        $parking->event_id = $request->event_id;
        $parking->name = $request->name;
        $parking->description = $request->description;
        $parking->total_place = $request->total_place;
        $parking->save();

        return redirect()->route('parkings.index')->with('success', 'Parking updated successfully.');
    }

    public function destroy($id)
    {
        $parking = Parking::findOrFail($id);
        $parking->delete();

        return redirect()->route('parkings.index')->with('success', 'Parking deleted successfully.');
    }
}
