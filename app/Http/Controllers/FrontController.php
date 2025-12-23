<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.index1');
    }

    public function about()
    {
        return view('layout.about2');
    }

    public function schedule()
    {
        return view('layout.schedule3');
    }

     public function speaker()
    {
        return view('layout.speakers4');
    }

    public function venue()
    {
        return view('layout.venue5');
    }

    public function gallery()
    {
        return view('layout.gallery6');
    }

    public function contact()
    {
        return view('layout.contact7');
    }

     public function viewevent()
    {
        return view('layout.view');
    }

      public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

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
