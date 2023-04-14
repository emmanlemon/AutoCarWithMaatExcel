<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AutoCars;
use App\Exports\CarsExport;
use Maatwebsite\Excel\Facades\Excel;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = AutoCars::orderBy('created_at','DESC')->get();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autocar = AutoCars::create($request->all());
        return redirect()->back()->with('message', 'Car Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AutoCars $autocar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutoCars $autocar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AutoCars $autocar)
    {
        $autocar->update($request->all());
        return redirect()->back()->with('message', 'Car Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutoCars $autocar)
    {
        $autocar->delete();
        return redirect()->back()->with('message', 'Car Deleted Successfully');
    }
}
