<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Trip;

class AdminController extends Controller
{
    public function showAdministracion(){
        $drivers = Driver::all();
        dd($drivers);
        return view('administracion')->with(['drivers' => $drivers]);
    }

    public function showTrips(){
        if(auth()->user()->role == 2){
            $trips = Trip::where('fecha', '>', now())
            ->orderBy('fecha', 'ASC')
            ->get();
            return view('showTrips')->with(['trips' => $trips]);
        }
        else{
            return redirect()->back();
        }
    }

    public function showTripsDrivers(){
        if(auth()->user()->role == 1){
            $trips = Trip::all();
        $drivers = Driver::all();
        return view('asignTripToDriver')->with(['trips' => $trips, 'drivers' => $drivers]);
        }
        else{
            return redirect()->back();
        }
    }

    public function asign(Request $request){
        $driver = Driver::find($request->drivers);
        $driver->trip_id = $request->trips;
        $driver->save();
        $trips = Trip::all();
        $drivers = Driver::all();
        return redirect()->route('showTripsDrivers')->with(['trips' => $trips, 'drivers' => $drivers]);
    }

    public function deleteAsign($id){
        $driver = Driver::find($id);
        $driver->trip_id = null;
        $driver->save();
        return redirect()->back();
    }
}
