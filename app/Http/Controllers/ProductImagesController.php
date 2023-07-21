<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductImages::get();
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
       if($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time() .".". $image->getClientOriginalExtension();
            Storage::put("/public/images/{$imagename}",File::get($image));
            $product = new ProductImages();
            $product->products_id = $request->products_id;
            $product->images = "images/{$imagename}";
            $product->save();
            return response(["msg"=> "Added img successfully"]);

        }else{
            return response(["msg"=> "File not supported"],422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductImages::find($id);
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
        // $images = ProductImages::find($id);
        // if($request->image !=''){
        //     $path = public_path().'/public/images/';
        //     $image = $request->image;
        //     $imagename = $image->getClientOriginalName();
        //     $image->move($path, $imagename);
        //     $images->update(['image'=>$imagename]);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = ProductImages::find($id);
        $image->delete();
        return response()->json(['msg' => 'Image Deleted successfuly']);
    }
}
