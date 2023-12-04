<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.courier.manage',
            [
                'courierData'=>Courier::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courier.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Courier::create($request->all());
        return back()->with('message', 'Courier info create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courier $courier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courier $courier)
    {
        return view('admin.courier.edit',
            [
                'courier'=>$courier,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courier $courier)
    {
        $courier ->update($request->all());
        return redirect('/courier')->with('message','Courier Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courier $courier)
    {
        $courier->delete();
        return redirect('/courier')->with('message','Courier Delete Successful');
    }
}
