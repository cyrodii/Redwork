<?php

namespace Redwork\Http\Controllers\Home;
use Redwork\Http\Controllers\Controller;

use Redwork\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.quote');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Quote::create([
            'name' => request('name'),
            'email' => request('email'),
            'siteNeeds' => implode(request('siteNeeds'), ', '),
            'cost' => request('cost'),
        ]);

        return response()->json([request()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Redwork\Quote  $Quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $Quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Redwork\Quote  $Quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $Quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Redwork\Quote  $Quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $Quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Redwork\Quote  $Quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $Quote)
    {
        //
    }
}
