<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        ContactUs::create($validated);   
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $ContactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $ContactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $ContactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $ContactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $ContactUs)
    {
        //
    }
}
