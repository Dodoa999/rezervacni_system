<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function show()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();
        $type_flight = Reservation::where('user_id', Auth::id())->sum('type_flight');


        return view('pages.dashboard', [
            "reservations" => $reservations,
            "type_flight" => $type_flight,
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'type_flight' => 'required|string',
            'reserved_at' => 'required|date',
        ],[
            'type_flight.required' => 'Vyplňte prosím typ letu',
            'reserved_at.required' => 'Vyplňte prosím datum rezervace letu',
            'reserved_at.date' => 'Datum rezervace musí být ve formátu YYYY-MM-DD',
        ]);

        $reservation = Reservation::create([
            'type_flight' => $request->input('type_flight'),
            'reserved_at' => $request->input('reserved_at'),
            'user_id' => Auth::user()->id,
        ]);
       

       return redirect()->route('dashboard');   
    }


    public function update(Request $request)
{
    $validated = $request->validate([
        'type_flight' => 'required|string',
        'reserved_at' => 'required|date',
    ],[
        'type_flight.required' => 'Vyplňte prosím typ letu',
        'reserved_at.required' => 'Vyplňte prosím datum rezervace letu',
        'reserved_at.date' => 'Datum rezervace musí být ve formátu YYYY-MM-DD',
    ]);

    $reservation = Reservation::where('id', $request->id)->first();

    $reservation->update([
        'type_flight' => $request->type_flight,
        'reserved_at' => $request->reserved_at,
    ]);

    return redirect()->route('dashboard');
}

    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->id);
        $reservation->delete();

        return redirect()->route('dashboard');
    }

}
