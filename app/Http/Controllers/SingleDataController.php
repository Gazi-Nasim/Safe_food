<?php

namespace App\Http\Controllers;

use App\Models\SingleData;
use Illuminate\Http\Request;
use Image;

class SingleDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = SingleData::get()->first();
        // dd($data);
        return view('singleData.create', compact('data'));
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

        $validatedData = $request->validate([
            'heading_one' => 'required|string|',
            'picture_one' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading_second' => 'required|string',
            'heading_third' => 'required|string',
            'picture_second' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading_fourth' => 'required|string',
            'picture_third' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading_fifth' => 'required|string',
        ]);

        $image_one = Image::make($request->file('picture_one'));
        $imageName_one = time() . '_' . $request->file('picture_one')->getClientOriginalName();
        $image_one->save(public_path('images/mustard_oil/') . $imageName_one);
        $validatedData['picture_one'] = $imageName_one;

        $image_two = Image::make($request->file('picture_second'));
        $imageName_two = time() . '_' . $request->file('picture_second')->getClientOriginalName();
        $image_two->save(public_path('images/mustard_oil/') . $imageName_two);
        $validatedData['picture_second'] = $imageName_two;

        $image_three = Image::make($request->file('picture_third'));
        $imageName_three = time() . '_' . $request->file('picture_third')->getClientOriginalName();
        $image_three->save(public_path('images/mustard_oil/') . $imageName_three);
        $validatedData['picture_third'] = $imageName_three;
        // dd($validatedData);
        SingleData::create($validatedData);
        return redirect()->route('headings.index')->with('msg', 'Saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SingleData $singleData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SingleData $singleData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'heading_one' => 'required|string|',
            'picture_one' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'heading_second' => 'required|string',
            'heading_third' => 'required|string',
            'picture_second' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'heading_fourth' => 'required|string',
            'picture_third' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'heading_fifth' => 'required|string',
        ]);

        if (isset($request->picture_one)) {
            $image_one = Image::make($request->file('picture_one'));
            $imageName_one = time() . '_' . $request->file('picture_one')->getClientOriginalName();
            $image_one->save(public_path('images/mustard_oil/') . $imageName_one);
            $validatedData['picture_one'] = $imageName_one;
        }

        if (isset($request->picture_second)) {
        $image_two = Image::make($request->file('picture_second'));
        $imageName_two = time() . '_' . $request->file('picture_second')->getClientOriginalName();
        $image_two->save(public_path('images/mustard_oil/') . $imageName_two);
        $validatedData['picture_second'] = $imageName_two;
        }

        if (isset($request->picture_third)) {            
        $image_three = Image::make($request->file('picture_third'));
        $imageName_three = time() . '_' . $request->file('picture_third')->getClientOriginalName();
        // dd($image_three);
        $image_three->save(public_path('images/mustard_oil/') . $imageName_three);
        $validatedData['picture_third'] = $imageName_three;
        }
        // dd($validatedData);
        SingleData::find($id)->update($validatedData);
        return redirect()->route('headings.index')->with('msg', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SingleData $singleData)
    {
        //
    }
}
