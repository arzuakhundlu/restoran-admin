<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return About::get();
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
        $about = new About();
        $about->fill($request->all());
        $about->save();
        return response()->json(['msg' => 'About Created successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return About::find($id);
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
        $about = About::find($id);
        $about->fill($request->all());
        $about->save();
        return response()->json(['msg' => 'About Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);
        $about->delete();
        return response()->json(['msg' => 'About Deleted successfully']);
    }
}
