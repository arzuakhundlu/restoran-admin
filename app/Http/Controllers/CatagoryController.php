<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Catagory::with('product')->get();
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
       $catagory = new Catagory();
       $catagory->fill($request->all());
       $catagory->save();
       return response()->json(['msg' => 'Catagory Created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Catagory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catagory = Catagory::find($id);
        $catagory->fill($request->all());
        $catagory->save();
        return response()->json(['msg' => 'Catagory Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return response()->json(['msg' => 'Catagory Deleted successfully']);
    }
}
