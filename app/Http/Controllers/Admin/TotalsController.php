<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Totals;
use Illuminate\Http\Request;

class TotalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Totals::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return dd('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validated = request()->validate([
            'desc' => 'required',
            'type' => 'required',
            'value' => 'required',
        ]);

        Totals::create($validated);

        return Totals::latest('created_at')->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Totals  $totals
     * @return \Illuminate\Http\Response
     */
    public function show($totals)
    {
        return Totals::where('type', $totals)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Totals  $totals
     * @return \Illuminate\Http\Response
     */
    public function edit(Totals $totals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Totals  $totals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Totals $totals)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Totals  $totals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Totals $totals)
    {
        //
    }
}
