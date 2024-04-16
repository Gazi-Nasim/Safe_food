<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Policy;
use App\Models\SingleData;
use App\Models\Why_mustrad;
use App\Models\WhySafefood;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $single = SingleData::get()->first();
        $advantage = Advantage::get();
        $policy = Policy::get();
        $mustard = Why_mustrad::get();
        $safe = WhySafefood::get();
        // dd($single);
        return view('frontend.landing', compact('single','advantage','policy','mustard','safe'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
